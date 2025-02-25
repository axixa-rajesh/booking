<?php

namespace App\Http\Controllers;

use App\Models\Firm;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // dd(Auth::user()->hasRole('service_provider'));
       
        return "Hello Schedule index";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        if($firm_id=request('firm_id')){
            $firm=Firm::find($firm_id);
            return view("firm.schedule",compact('firm'));
        }
        return abort('419');
        // dd("hello");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        foreach($request->week as $week){
        $info=[
            'user_id'=>Auth::user()->id,
            'firm_id'=>$request->firm_id,
            'week' => $week,
            'shift'=>$request->shift,
            'start_from'=>$request->start_from,
            'end_from' => $request->end_from,
            'max_booking'=>$request->max_appointment
        ];

        Schedule::create($info);
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schedule $schedule)
    {
        //
    }
}
