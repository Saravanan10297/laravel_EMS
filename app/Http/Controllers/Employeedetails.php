<?php

namespace App\Http\Controllers;

use App\Models\emp;
use Illuminate\Http\Request;

class Employeedetails extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Index()
    {
        //$emps=emp::all();
        //$emps=emp::orderBy('id','desc')->get();
        $emps=emp::orderBy('id','desc')->paginate(3);
       //dd($emps);
        //return view('index',['employee'=>$emps]);
        return view('index',compact('emps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' =>'required|unique:emps,email|email',
            'phone' =>'required|unique:emps,phone|numeric',
            'joining_date' => 'required',
            'salary' => 'required'
    
        ],[
            'email.unique' =>'email id already exists'
        ]);
        
        $data=$request->except('_token');
        emp::create($data);
        // $employee=new emp;
        // $employee->name=$data['name'];
        // $employee->email=$data['email'];
        // $employee->joining_date=$data['joining_date'];
        // $employee->salary=$data['salary'];
        // $employee->phone=$data['phone'];
        // //$employee->is_active=$data['is_active'];
        // $employee->save();
        //dd('successfully Done');
        return redirect()->route('employee.index')->withMessage('Employee has been created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $empl=emp::find($id);
        return view('show',compact('empl'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $single=emp::find($id);
        return view('edit',compact('single'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
           $request->validate([
            'name' => 'required',
            'email' =>'required|unique:emps,email|email',
            'phone' =>'required|unique:emps,phone|numeric',
            'joining_date' => 'required',
            'salary' => 'required'
    
        ],[
            'email.unique' =>'email id already exists'
        ]);
          $data=$request->all();
          $emps=emp::find($id);
          $emps->update($data);
          return redirect()->route('employee.edit',$emps->id)->withMmailessage('Employee deta update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee1=emp::find($id);
        $employee1->delete();
        return redirect()->route('employee.index')->withMessage('employee date deleted successfully');
    }
}
