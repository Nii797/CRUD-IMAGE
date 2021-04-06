<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employee');
    }

    public function store(Request $request)
    {
        $employee = new Employee();

        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->post = $request->input('post');

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // Getting image extension
            $filename = time().'.'.$extension;
            $file->move('uploads/employee/', $filename);
            $employee->image = $filename;
        } else {
            return $request;
            $employee->image = '';
        }

        $employee->save();

        return redirect('employeepage')
            ->with('employee'.$employee)
            ->with('success','Data Success to add');
    }

    public function display()
    {
        $employees = Employee::all();

        return view('employeeform')->with('employees',$employees);
    }

    public function edit($id)
    {
        $employees = Employee::find($id);
        return view('employeeupdateform')->with('employees',$employees);
    }

    public function update(Request $request, $id)
    {
        $employees = Employee::find($id);

        $employees->name = $request->input('name');
        $employees->email = $request->input('email');
        $employees->post = $request->input('post');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time().'.'.$extension;
            $file->move('uploads/employee/', $filename);
            $employees->image = $filename;
        }

        $employees->save();

        return redirect('/employeepage')->with('employees'.$employees);
    }

    public function delete($id)
    {
        $employees = Employee::find($id);
        $employees->delete();

        return redirect('/employeepage')->with('employees',$employees);
    }
}
