<?php

namespace App\Http\Controllers;

use App\Report;
use DB;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Repositories\ReportRepository;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    protected $users;
    protected $reports;
    private $occupationList = array("Please select your occupation", "Government Service", "Private Service", "Student", "Doctor", "Engineer", "Teacher",
        "Politician", "Lawyer", "Law and Order", "Businessman", "Journalist", "Banker", "Housewife", "Unemployed", "Worker", "Farmer", "Others");

    public function __construct(UserRepository $users, ReportRepository $reports)
    {
        $this->middleware('auth');
        $this->users = $users;
        $this->reports = $reports;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.home', [
            'pending' => $this->reports->getAllReports(NULL, \Auth::id(), 'pending'),
            'reviewed' => $this->reports->getAllReports(NULL, \Auth::id(), 'reviewed'),
        ]);

    }

    public function show(Request $request, $id)
    {
        if ($id == \Auth::id() or \Auth::user()->isReviewer()) {
            return view('auth.view_profile', [
                'user_data' => $this->users->getUserInfo($id),
                'submitted_reports' => $this->users->getSubmittedReports($id),
            ]);
        }

        return back();
    }

    public function exploreReporters(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'exists:users,id',
        ]);

        $search = new User;
        $search->user_id = ($request->user_id) ? $request->user_id : '%%';
        $search->occupation = '%%';

        if ($request->occupation && $request->occupation != 'Please select your occupation') {
            $this->validate($request, [
                'occupation' => 'in:Government Service,Private Service,Student,Doctor,Engineer,Teacher,Politician,Lawyer,Law and Order, 
                            Businessman,Journalist,Banker,Housewife,Unemployed,Worker,Farmer,Others',
            ]);
            $search->occupation = $request->occupation;
        }


        if (\Auth::user()->isReviewer()) {
            return view('auth.explore_reporters', [
                'userId' => $search->user_id,
                'occupation' => $search->occupation,
                'occupationList' => $this->occupationList,
                'reporters' => $this->users->getUserList($search),
            ]);
        }

        return back();
    }

    public function updateProfile()
    {
        return view('auth.update', [
            'user_data' => $this->users->getUserInfo(\Auth::id()),
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = new User;
        $user->id = $id;
        $this->authorize('update', $user);

        $this->validate($request, [
            'full_name' => 'required|max:255|regex:/^[[:alpha:](\.)?][ [:alpha:](\.)?]+$/',
            'contact_number' => 'required|size:11|regex:/^01[156789]{1}[0-9]{8}$/',
            'email_address' => 'required|email_address|max:255',
            'password' => 'required|confirmed|min:6',
            'national_id_number' => 'required|size:17|regex:/^19[4-9][0-9]{14}$/',
            'date_of_birth' => 'required|date|regex:/^' . substr($request['national_id_number'], 0, 4) . '/',
            'occupation' => 'required|in:Government Service,Private Service,Student,Doctor,Engineer,Teacher,Politician,Lawyer,Law and Order, 
                                        Businessman,Journalist,Banker,Housewife,Unemployed,Worker,Farmer,Others',
            'designation' => 'string',
            'contact_address' => 'string'
        ]);


        DB::table('users')
            ->where('id', $id)
            ->update([
                'full_name' => $request->full_name,
                'contact_number' => $request->contact_number,
                'email_address' => $request->email_address,
                'password' => bcrypt($request->password),
                'national_id_number' => $request->national_id_number,
                'date_of_birth' => $request->date_of_birth,
                'occupation' => $request->occupation,
                'designation' => $request->designation,
                'contact_address' => $request->contact_address,
            ]);


        return redirect('/home');
    }


}
