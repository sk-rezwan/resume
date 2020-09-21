<?php

namespace App\Http\Controllers;

use App\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $education = Education::get(); //show all data


        return view('education.index', compact('education'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('education.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'school' => 'required',
            'school_location' => 'required',
            'degree' => 'required',
            'field_of_study' => 'required',
            'graduation_start_date' => 'required',
            'graduation_end_date' => 'required',
        ]);
        
        $detail = new Education();

        $detail->school = $request->input('school');
        $detail->school_location = $request->input('school_location');
        $detail->degree = $request->input('degree');
        $detail->field_of_study = $request->input('field_of_study');
        $detail->graduation_start_date = $request->input('graduation_start_date');
        $detail->graduation_end_date = $request->input('graduation_end_date');

        // auth()->user()->education()->create($request->all());

        $detail->save();

       return redirect()->route('education.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
       // dd('this is edit');

        return view('education.edit', compact('education'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Education $education)
    {
        //dd('this is update');
        // $request->validate([
        //     'school' => 'required',
        //     'school_location' => 'required',
        //     'degree' => 'required',
        //     'field_of_study' => 'required',
        //     'graduation_start_date' => 'required',
        //     'graduation_end_date' => 'required',
        // ]);
        
        $detail = new Education();

        $detail->school = $request->input('school');
        $detail->school_location = $request->input('school_location');
        $detail->degree = $request->input('degree');
        $detail->field_of_study = $request->input('field_of_study');
        $detail->graduation_start_date = $request->input('graduation_start_date');
        $detail->graduation_end_date = $request->input('graduation_end_date');

        $education->update($request->all());

       return redirect()->route('education.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        $education->delete();
        return back();
    }
}
