<?php

namespace App\Http\Controllers;

use App\Opinion;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class OpinionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'my_opinion' => 'required|string',
            'evidences' => 'mimes:zip',
        ]);

        $opinion = new Opinion;
        $opinion->public_opinion = $request->my_opinion;

        $evidences = $request->file('evidences');

        if ($evidences) {

            $fileName = 'opinion_' . strtotime('now') . '_' . $evidences->getClientOriginalName();
            $evidences->move(base_path() . '/storage/app/public/', $fileName);

            $opinion->evidences = $fileName;
        }

        if ($request->anonymous != 'true' && \Auth::check()) {
            $opinion->reporter_id = \Auth::id();
        }

        $opinion->report_id = $id;
        $opinion->save();


        return back();

    }

    public function download_extra($id)
    {

        $fileName = DB::table('opinions')->select('evidences')->where('id', $id)->get();

        return response()->download(base_path() . '/storage/app/public/' . $fileName[0]->evidences);

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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
