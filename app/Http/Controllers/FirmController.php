<?php

namespace App\Http\Controllers;

use App\Models\Firm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FirmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $firms=Auth::user()->firm;
        return view("firm.index",compact('firms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("firm.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $info=[
            'firm_name'=>$request->firm_name, 
            // 'profilepic'=>$request->, 
            'gst_no'=>$request->gst_no, 
            'register_no'=>$request->register_no, 
            // 'map'=>$request->map, 
            'pan_no'=>$request->pan_no, 
            'country'=>$request->country, 
            'state'=>$request->state, 
            'city'=>$request->city, 
            'address'=>$request->address, 
            'landmark'=>$request->landmark, 
            'street'=>$request->street, 
            'since'=>$request->since, 
            'pincode'=>$request->pincode, 
            'firm_mobile'=>$request->firm_mobile, 
            'user_id'=>Auth::user()->id
        ];
        Firm::create($info);
    }

    /**
     * Display the specified resource.
     */
    public function show(Firm $firm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Firm $firm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Firm $firm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Firm $firm)
    {
        //
    }
    public function updateprofilepic(){
        $firmid=request('id');
        $fo= request('profilepic');
        $filename=time()."_".$fo->getClientOriginalName();
        $fo->move('./images',$filename);
        $firm=Firm::find($firmid);
        if($firm->profilepic){
            unlink('./images/'. $firm->profilepic);
        }
        $firm->profilepic=$filename;
        $firm->save();
        return redirect('/firm');
    }
}
