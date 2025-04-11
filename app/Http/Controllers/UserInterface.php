<?php

namespace App\Http\Controllers;

use App\Models\Firm;
use Illuminate\Http\Request;

class UserInterface extends Controller
{
    //
    public function show(){
        $ary=[];
        $keyword=request('keyword');
        $data = Firm::when($keyword, function ($query, $keyword) {
            $query->where(function ($q) use ($keyword) {
                $q->where('firm_name', 'like', "%$keyword%")
                    ->orWhere('firm_mobile', 'like', "%$keyword%")
                    ->orWhere('pincode', 'like', "%$keyword%")
                    ->orWhere('address', 'like', "%$keyword%");
            });
        })->get();
        
        return view("userinterface.show",compact('data'));
    }
}
