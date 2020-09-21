<?php

namespace App\Http\Controllers;

use App\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experience = Experience::get(); //show all data
        //dd('experience');

        return view('experience.index', compact('experience'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('experience.create');
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
            'job_title' => 'required',
            'employer' => 'required',
            'city' => 'required',
            'state' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        
        $detail = new Experience();

        $detail->job_title = $request->input('job_title');
        $detail->employer = $request->input('employer');
        $detail->city = $request->input('city');
        $detail->state = $request->input('state');
        $detail->start_date = $request->input('start_date');
        $detail->end_date = $request->input('end_date');


        $detail->save();

       return redirect()->route('experience.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function edit(Experience $experience)
    {
        // dd('this is edit');

        return view('experience.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experience $experience)
    {
        $detail = new Experience();

        $detail->job_title = $request->input('job_title');
        $detail->employer = $request->input('employer');
        $detail->city = $request->input('city');
        $detail->state = $request->input('state');
        $detail->start_date = $request->input('start_date');
        $detail->end_date = $request->input('end_date');


        $experience->update($request->all());

        return redirect()->route('experience.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $experience)
    {
        $experience->delete();

        return back();
    }
}
