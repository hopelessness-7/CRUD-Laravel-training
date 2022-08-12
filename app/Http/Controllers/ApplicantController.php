<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicants;
use DB;
class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $applicants = Applicants::latest()->paginate(5);
        return view('applicants.index',compact('applicants'))
            ->with('i',(request()->input('page',1) - 1) * 5);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('applicants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title'=>'required|min:1|max:50',
        //     'avtor_id'=>'required|min:1|max:5',
        // ]);

        Applicants::create($request->all());

        return redirect()->route('applicants.index');
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
    public function edit(Applicants $applicant)
    {
        return view('applicants.edit',compact('applicant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applicants $applicant)
    {
        $applicant->update($request->all());

        return redirect()->route('applicants.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicants $applicant)
    {
        $applicant->delete();

        return redirect()->route('applicants.index');
    }
}
