<?php

namespace App\Http\Controllers;
use App\Models\specialties_and_professions;
use Illuminate\Http\Request;

class Specialties_and_professionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialties_and_professions = specialties_and_professions::latest()->paginate(5);
        return view('specialties_and_professions.index',compact('specialties_and_professions'))
            ->with('i',(request()->input('page',1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('specialties_and_professions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        specialties_and_professions::create($request->all());

        return redirect()->route('specialties_and_professions.index');
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
    public function edit(specialties_and_professions $specialties_and_profession)
    {
        return view('specialties_and_professions.edit',compact('specialties_and_profession'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, specialties_and_professions $specialties_and_profession)
    {
        $specialties_and_profession->update($request->all());

        return redirect()->route('specialties_and_professions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(specialties_and_professions $specialties_and_profession)
    {
        $specialties_and_profession->delete();

        return redirect()->route('specialties_and_professions.index');
    }
}
