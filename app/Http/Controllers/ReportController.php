<?php

namespace App\Http\Controllers;

use App\Report;
use App\Http\Requests;
use App\Repositories\UserRepository;
use DB;
use Illuminate\Http\Request;
use App\Repositories\ReportRepository;
use League\Flysystem\Adapter\NullAdapter;


class ReportController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $reports;
    protected $reviewers;
    private $reportTypeList = array("Select report type", "Crime", "Corruption", "Public Hassle", "General Complain");


    /**
     * Create a new controller instance.
     *
     * @param  ReportRepository $reports
     * @param UserRepository $reviewers
     */
    public function __construct(ReportRepository $reports, UserRepository $reviewers)
    {
        $this->reports = $reports;
        $this->reviewers = $reviewers;
    }

    public function index(Request $request)
    {
        $this->validate($request, [
            'from_date' => 'before:now',
            'to_date' => 'after:from_date|before:now',
            'incident_location' => 'string',
        ]);

        $search = new Report;
        $search->from_date = ($request->from_date) ? $request->from_date : '%%';
        $now = date_format(date_create(NULL, timezone_open("Asia/Dhaka")), 'Y-m-d');
        $search->to_date = ($request->to_date) ? $request->to_date : $now;
        $search->incident_location = ($request->incident_location) ? $request->incident_location : '%%';
        $search->report_type = '%%';

        if ($request->report_type && $request->report_type != 'Select report type') {
            $subTypeList = $this->makeSubTypeList($request->report_type);
            $this->validate($request, [
                'report_type' => 'in:Crime,Corruption,Public Hassle,General Complain',
                'report_subtype' => 'in:' . $subTypeList,
            ]);
            $search->report_type = $request->report_type;
        }

        $search->report_subtype = ($request->report_subtype) ? $request->report_subtype : '%%';


        if (\Auth::check() && \Auth::user()->isReviewer()) {
            return view('report.index', [
                'fromDate' => $search->from_date,
                'toDate' => $search->to_date,
                'reportType' => $search->report_type,
                'incidentLocation' => $search->incident_location,
                'reportTypeList' => $this->reportTypeList,
                'pending' => $this->reports->getAllReports($search, NULL, 'pending'),
                'reviewed' => $this->reports->getAllReports($search, NULL, 'reviewed'),
                'total_reports' => count($this->reports->getAllReports($search, NULL, 'pending')) + count($this->reports->getAllReports($search, NULL, 'reviewed')),
            ]);
        }

        return view('report.index', [
            'fromDate' => $search->from_date,
            'toDate' => $search->to_date,
            'reportType' => $search->report_type,
            'incidentLocation' => $search->incident_location,
            'reportTypeList' => $this->reportTypeList,
            'pending' => [],
            'reviewed' => $this->reports->getAllReports($search, NULL, 'reviewed'),
            'total_reports' => count($this->reports->getAllReports($search, NULL, 'pending')) + count($this->reports->getAllReports($search, NULL, 'reviewed')),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('report.submit_report', [
            'reportTypeList' => $this->reportTypeList,
        ]);
    }

    public function getSubTypes($reportType)
    {

        $crimeTypeList = array("Select report subtype", "Dacoity", "Robbery", "Murder", "Riot", "Women and Child Repression", "Kidnapping",
            "Theft", "Narcotics", "Smuggling", "Other Crimes");

        $corruptionTypeList = array("Select report subtype", "Bribery", "Negligence to Duty", "Political Influence", "Money Laundering",
            "Embezzlement", "Cheating", "Blackmail", "Other Corruptions");

        $publicHassleTypeList = array("Select report subtype", "Solid Waste Management", "Roads and Footpaths", "Drainage", "Factories",
            "Health Issues", "Social Welfare Issues", "Other Public Hassles");

        $generalComplainTypeList = array("Select report subtype", "Human Rights Violation", "Public Harassment", "Other General Complains");

        $reportSubType = NULL;


        if ($reportType == "Crime") {
            $reportSubType = $crimeTypeList;
        } elseif ($reportType == "Corruption") {
            $reportSubType = $corruptionTypeList;
        } elseif ($reportType == "Public Hassle") {
            $reportSubType = $publicHassleTypeList;
        } elseif ($reportType == "General Complain") {
            $reportSubType = $generalComplainTypeList;
        }

        $data = '';

        if ($reportSubType) {
            foreach ($reportSubType as $rst) {
                if (!empty($data)) {
                    $data .= ",$rst";
                } else {
                    $data = $rst;
                }
            }
        }

        return $data;
    }


    public function makeSubTypeList($report_type)
    {
        $subTypes = explode(",", $this->getSubTypes($report_type));
        $subTypeList = $subTypes[1];
        for ($i = 2; $i < count($subTypes); $i++) {
            $subTypeList .= ",$subTypes[$i]";
        }
        return $subTypeList;
    }

    public function store(Request $request)
    {

        $subTypeList = $this->makeSubTypeList($request->report_type);

        $this->validate($request, [
            'report_type' => 'required|in:Crime,Corruption,Public Hassle,General Complain',
            'report_subtype' => 'required|in:' . $subTypeList,
            'accused_authority' => 'string',
            'responsible_authority' => 'string',
            'date_and_time' => 'required|before:now',
            'incident_location' => 'required|string',
            'short_description' => 'required|string',
            'evidences' => 'required|mimes:zip',
            'CaptchaCode' => 'required|valid_captcha'
        ]);

        $report = new Report;
        $report->report_type = $request->report_type;
        $report->report_subtype = $request->report_subtype;
        $report->accused = $request->accused_authority;
        $report->responsible = $request->responsible_authority;
        $report->date_and_time = $request->date_and_time;
        $report->incident_location = $request->incident_location;
        $report->short_description = $request->short_description;

        $evidences = $request->file('evidences');

        $fileName = 'report_' . strtotime('now') . '_' . $evidences->getClientOriginalName();
        $evidences->move(base_path() . '/storage/app/public/', $fileName);

        $report->evidences = $fileName;

        if ($request->anonymous != 'true' && \Auth::check()) {
            $report->reporter_id = \Auth::id();
        }

        $report->save();


        return view('common.success', [
            'type' => 'report',
        ]);


    }

    public function canView($id)
    {
        if (\Auth::check() && \Auth::user()->isReviewer()) {
            return true;
        } else {
            $reviewed = $this->reports->getAllReports(NULL, NULL, 'reviewed');
            foreach ($reviewed as $report) {
                if ($report->id == $id) {
                    return true;
                }
            }
        }


    }

    public function show(Request $request, $id)
    {
        if ($this->canView($id)) {
            return view('report.view_report', [
                'report_data' => $this->reports->getReport($id),
                'comments' => $this->reports->getComments($id),
                'updates' => $this->reports->getUpdates($id),
                'reviews' => $this->reports->getReviews($id),
            ]);
        }
        return back();


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function download(Request $request, $id)
    {
        if ($this->canView($id)) {

            $report_data = $this->reports->getReport($id);

            return response()->download(base_path() . '/storage/app/public/' . $report_data[0]->evidences);

        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }


}
