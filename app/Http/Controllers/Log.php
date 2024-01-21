<?php

namespace App\Http\Controllers;
use App\Models\register;
use Illuminate\Http\Request;


class Log extends Controller
{
    public function Register(Request $request){

        return view('login');
    }

    public function storereg(Request $request)
    {
        $data = $request->except('_token');
      
        register::create($data);

        // Process and store the data in the database
        // ...

        // Optionally, you can redirect to another page after processing the form

        return redirect()->route('some.route');
    }
}
