<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Log extends Controller
{
    public function Register(Request $request){

        return view('login');
    }
}
