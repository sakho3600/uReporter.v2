<?php

namespace App\Repositories;

use DB;
use App\User;


class UserRepository
{
    /**
     * Get all of the report for a given user.
     *
     * @param  User $user
     * @return Collection
     */


    public function getUserInfo($user_id)
    {
        return DB::table('users')->where('id', $user_id)->get();
    }

    public function getUserList($search)
    {
        if ($search->user_id != '%%') {
            return DB::table('users')
                ->leftJoin('reports', 'users.id', '=', 'reports.reporter_id')
                ->select('users.id', 'full_name', 'contact_number', 'email_address', 'national_id_number',
                    'date_of_birth', 'occupation', DB::raw('COUNT(reports.id) AS total_reports'))
                ->where([
                    ['users.id', $search->user_id],
                    ['occupation', 'like', $search->occupation],
                ])
                ->groupBy('users.id')
                ->orderBy('total_reports', 'desc')
                ->get();
        }

        return DB::table('users')
            ->leftJoin('reports', 'users.id', '=', 'reports.reporter_id')
            ->select('users.id', 'full_name', 'contact_number', 'email_address', 'national_id_number',
                'date_of_birth', 'occupation', DB::raw('COUNT(reports.id) AS total_reports'))
            ->where('occupation', 'like', $search->occupation)
            ->groupBy('users.id')
            ->orderBy('total_reports', 'desc')
            ->get();
    }

    public function getSpecialUserList($user_type)
    {
        return DB::table('users')
            ->where('user_type', $user_type)
            ->orderBy('personal_rating', 'desc')
            ->get();
    }

    public function getSubmittedReports($user_id)
    {
        return DB::table('reports')
            ->select(DB::raw('count(*) as submitted_reports'))
            ->where('reporter_id', $user_id)->get();
    }
}
