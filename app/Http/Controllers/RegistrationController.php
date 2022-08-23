<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function form()
    {
        return view('add');
    }
    public function add(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'class'=>'required',
            'email'=>'required |email',
            'password'=>'required'
        ]);
        $student=new Student();
        $student->name=$request['name'];
        $student->class=$request['class'];
        $student->email=$request['email'];
        $student->password=$request['password'];
        $student->save();
        // #########  OR #########
        // $student = Student::create([
        //     'name' => $request['name'],
        //     'class' => $request['class'],
        //     'email' => $request['email'],
        //     'password' => $request['password'],
        // ]);
        return redirect('register');
    }
    public function show()
    {
        $students=Student::all();
        return view('view',compact('students'));
    }
    public function delete($id)
    {
        Student::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $students=Student::find($id);
        return view('update',['students'=>$students]);
    }
    public function update(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'class'=>'required',
            'email'=>'required |email',
            'password'=>'required'
        ]);
        $student=Student::find($request->id);
        $student->name=$request->get('name');
        $student->class=$request->class;
        $student->email=$request->email;
        $student->password=$request->password;
        $student->save();
        return redirect('view');

    }
}
