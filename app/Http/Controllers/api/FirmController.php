<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Firm;
use Illuminate\Http\Request;

class FirmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         return response(['data'=>Firm::all()],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $info = [
            'firm_name' => $request->firm_name,
            // 'profilepic'=>$request->, 
            'gst_no' => $request->gst_no,
            'register_no' => $request->register_no,
            // 'map'=>$request->map, 
            'pan_no' => $request->pan_no,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
            'address' => $request->address,
            'landmark' => $request->landmark,
            'street' => $request->street,
            'since' => $request->since,
            'pincode' => $request->pincode,
            'firm_mobile' => $request->firm_mobile,
            'user_id' => 4
        ];
        Firm::create($info);
        return response(['data' =>"done"], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return response(['data' => Firm::find($id)], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $info = [
            'firm_name' => $request->firm_name,
            // 'profilepic'=>$request->, 
            'gst_no' => $request->gst_no,
            'register_no' => $request->register_no,
            // 'map'=>$request->map, 
            'pan_no' => $request->pan_no,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
            'address' => $request->address,
            'landmark' => $request->landmark,
            'street' => $request->street,
            'since' => $request->since,
            'pincode' => $request->pincode,
            'firm_mobile' => $request->firm_mobile,
            'user_id' => 4
        ];
        Firm::updateOrCreate(['id'=>$id],$info);
        return response(['data' => "done"], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Firm::find($id)->delete();
        return response(['data' => "done"], 200);
    }
}
