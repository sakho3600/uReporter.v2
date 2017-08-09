<?php

namespace App\Repositories;

use DB;
use App\User;
use App\Report;
use App\Opinion;

class ReportRepository
{
    /**
     * Get all of the report for a given user.
     *
     * @param  User $user
     * @return Collection
     */
    public function forUser()
    {
        //return Report::where('report_id', user()->report_id)->orderBy('created_at', 'asc')->get();
        return Report::orderBy('created_at', 'asc')->get();
    }


    public function getAllReports($search, $id, $type)
    {
        $type = ($type == 'reviewed') ? '>' : '=';

        if ($id && $search) {
            return DB::table('reports')
                ->leftJoin('opinions', 'reports.id', '=', 'opinions.report_id')
                ->select('reports.id', 'date_and_time', 'incident_location', 'short_description', 'report_subtype', DB::raw('COUNT(opinions.id) AS total_comments'))
                ->where([
                    ['reports.reporter_id', $id],
                    [DB::raw('countReviews(reports.id)'), $type, 0],
                    ['report_type', 'like', $search->report_type],
                    ['report_subtype', 'like', $search->report_subtype],
                    ['incident_location', 'like', '%' . $search->incident_location . '%'],
                ])
                ->whereBetween(DB::raw('Date(date_and_time)'), [$search->from_date, $search->to_date])
                ->groupBy('reports.id')
                ->orderBy('total_comments', 'desc')
                ->get();
        } elseif ($id) {
            return DB::table('reports')
                ->leftJoin('opinions', 'reports.id', '=', 'opinions.report_id')
                ->select('reports.id', 'date_and_time', 'incident_location', 'short_description', 'report_subtype', DB::raw('COUNT(opinions.id) AS total_comments'))
                ->where([
                    ['reports.reporter_id', $id],
                    [DB::raw('countReviews(reports.id)'), $type, 0],
                ])
                ->groupBy('reports.id')
                ->orderBy('total_comments', 'desc')
                ->get();
        }

        return DB::table('reports')
            ->leftJoin('opinions', 'reports.id', '=', 'opinions.report_id')
            ->select('reports.id', 'date_and_time', 'incident_location', 'short_description', 'report_subtype', DB::raw('COUNT(opinions.id) AS total_comments'))
            ->where(DB::raw('countReviews(reports.id)'), $type, 0)
            ->groupBy('reports.id')
            ->orderBy('total_comments', 'desc')
            ->get();

    }

    public function getReport($id)
    {
        return DB::table('reports')->where('id', $id)->get();
    }

    public function getReviewerList()
    {
        $reviewerList = DB::table('users')->select('id')->whereIn('user_type', ['reviewer', 'admin'])->get();
        $reviewer = NULL;
        for ($i = 0; $i < count($reviewerList); $i++) {
            $reviewer[$i] = $reviewerList[$i]->id;
        }
        return $reviewer;
    }

    public function getComments($id)
    {
        $report = $this->getReport($id);
        $reporter_id = $report[0]->reporter_id;

        if ($reporter_id) {
            return DB::table('opinions')->where('report_id', $id)
                ->where(function ($query) use ($reporter_id) {
                    $query->where('reporter_id', '<>', $reporter_id)->orWhereNull('reporter_id')->orWhereNotIn('reporter_id', $this->getReviewerList());
                })->get();
        } else {
            return DB::table('opinions')->where('report_id', $id)
                ->where(function ($query) {
                    $query->whereNull('reporter_id')->orWhereNotIn('reporter_id', $this->getReviewerList());
                })->get();

        }
    }

    public function getReviews($id)
    {
        $report = $this->getReport($id);
        $reviewer = $this->getReviewerList();
        $reporter_id = $report[0]->reporter_id;

        if ($reporter_id) {
            return DB::table('opinions')->where([
                ['report_id', $id],
                ['reporter_id', '<>', $reporter_id],
            ])->whereIn('reporter_id', $reviewer)->get();
        } else {
            return DB::table('opinions')->where('report_id', $id)->whereIn('reporter_id', $reviewer)->get();
        }
    }

    public function getUpdates($id)
    {
        $report = $this->getReport($id);
        $reporter_id = $report[0]->reporter_id;

        if ($reporter_id) {
            return DB::table('opinions')->where([
                ['report_id', $id],
                ['reporter_id', $reporter_id],
            ])->get();
        } else {
            return [];
        }

    }

}
