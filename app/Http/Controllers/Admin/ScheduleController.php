<?php

namespace App\Http\Controllers\Admin;

use App\Models\Doctor;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedule=Schedule::all();
        return view('admin.pages.schedule.index',compact('schedule'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $days=['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
        $doctor=Doctor::all();
        return view('admin.pages.schedule.create',compact('doctor','days'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $days=$request->days;
        $fromtime=$request->fromtime;
        $totime=$request->totime;
        $time=[$fromtime,$totime];
        $schedule=array_combine($days,$time);
        dd($schedule);
        Schedule::create([

            'doctor_id'=>$request->doctor_id,   
            'days'=>$request->days,
            'fromtime'=>$request->fromtime,
            'totime'=>$request->totime,
            'patient_time'=>$request->patient_time,
            'serial'=>$request->serial,
            'status'=>$request->status

        ]);
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
