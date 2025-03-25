<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserInterface extends Controller
{
    //
    public function show(){
        return view("userinterface.show");
    }
}
