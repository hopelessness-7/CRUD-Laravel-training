<?php

namespace App\Http\Controllers;

use App\Models\Applicants;
use Illuminate\Http\Request;
use App\Models\recruited_applicants;
use DB;

class RecruitedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recruiteds = DB::table("recruited_applicants")
        ->join("applicants", "applicant_id", "=", "applicants.id")
        ->join("specialties_and_professions", "specialties_and_profession_id", "=", "specialties_and_professions.id")
        ->select("recruited_applicants.id", "applicants.Full_Name",'specialties_and_professions.title','recruited_applicants.created_at' )
        ->get();
        // $recruiteds = recruited_applicants::latest()->paginate(5);
        return view('recruiteds.index',compact('recruiteds'));
        //     ->with('i',(request()->input('page',1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $applicants = DB::select('select * from applicants');
        $specialties_and_professions = DB::select('select * from specialties_and_professions');

        return view('recruiteds.create',compact('specialties_and_professions','applicants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        recruited_applicants::create($request->all());

        return redirect()->route('recruiteds.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
