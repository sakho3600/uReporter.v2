<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{


    protected $users;

    public function __construct(UserRepository $users)
    {
        $this->middleware('admin');
        $this->users = $users;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.admin', [
            'admins' => $this->users->getSpecialUserList('admin'),
            'reviewers' => $this->users->getSpecialUserList('reviewer'),
            'authorities' => $this->users->getSpecialUserList('authority'),
            'publishers' => $this->users->getSpecialUserList('publisher'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->reviewer_id) {
            $this->validate($request, ['reviewer_id' => 'required|exists:users,id']);
            $this->update($request, $request->reviewer_id);
        } elseif ($request->authority_id) {
            $this->validate($request, ['authority_id' => 'required|exists:users,id']);
            $this->update($request, $request->authority_id);
        } elseif ($request->publisher_id) {
            $this->validate($request, ['publisher_id' => 'required|exists:users,id']);
            $this->update($request, $request->publisher_id);
        }


        return redirect('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            $id => 'exists:users,id',
            'delete_admin' => 'regex:/^Delete Admin$/',
            'create_admin' => 'regex:/^Create Admin$/',
            'delete_reviewer' => 'regex:/^Delete Reviewer$/',
            'delete_authority' => 'regex:/^Delete Authority$/',
            'delete_publisher' => 'regex:/^Delete Publisher$/',
        ]);

        $user_type = NULL;

        if ($request->delete_admin or $request->reviewer_id) {
            $user_type = 'reviewer';
        } elseif ($request->create_admin) {
            $user_type = 'admin';
        } elseif ($request->delete_reviewer or $request->delete_authority or $request->delete_publisher) {
            $user_type = 'reporter';
        } elseif ($request->authority_id) {
            $user_type = 'authority';
        } elseif ($request->publisher_id) {
            $user_type = 'publisher';
        }

        if ($user_type) {
            DB::table('users')
                ->where('id', $id)
                ->update(['user_type' => $user_type]);
        }


        return redirect('admin');
    }

    public function destroy($id)
    {
        //
    }
}
