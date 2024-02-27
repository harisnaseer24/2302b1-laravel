<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // public function welcome() {
    //     $name="Haris Naseer";
    //     $email="harisnaseer258@gmail.com";
    // //with compact method
    //     // return view('welcome',compact('name','email'));
    // //with `with` method
    // // return view('welcome')
    // // ->with('name',$name)
    // // ->with('email',$email);

    // // with associative array
    // $data = [
    //     'name'=>"Haris",
    //     'email'=>"haris@gmail.com"
    // ];
    // return view("welcome", $data);

    // }
    // public function signup() {
    //     return view('signup');
    // }

    public function getStudents(){
        return view("students",["students"=>StudentModel::get()]);
    }
    public function registerStudent(){
        return view("registerStudent");
    }
    public function createStudent(Request $request){  
        $request->validate([
            "username"=>"required",
            "email"=>"required | email",
            "contact"=>"required",
            "city"=>"required",
            "image"=>"required |mimes:png,jpg,jpeg |max:100000",
        ]);

        $imgname=time().".".$request->image->extension();
        $request->image->move(public_path("/student_uploads"), $imgname);
        // dd($imgname);
        $student = new StudentModel();
        $student->username = $request->username;
        $student->email = $request->email;
        $student->contact = $request->contact;
        $student->city = $request->city;
        $student->image = $imgname;
        $student->save();
        return back()->withSuccess('Student Registered Successfully');
    }
    public function deleteStudent($id){
        StudentModel::destroy($id);
        return back()->withSuccess('Student Deleted Successfully..!');

    }
    public function editStudent($id){

        return view("editstudentform",["student"=>StudentModel::find($id)]);
 
    }
    public function updateStudentDetails(Request $request, $id){

        $request->validate([
            "username"=>"required",
            "email"=>"required | email",
            "contact"=>"required",
            "city"=>"required",
            "image"=>"required |mimes:png,jpg,jpeg |max:100000",
        ]);

        $imgname=time().".".$request->image->extension();
        $request->image->move(public_path("/student_uploads"), $imgname);
        $student =StudentModel::find($id);
        $student->username = $request->username;
        $student->email = $request->email;
        $student->contact = $request->contact;
        $student->city = $request->city;
        $student->image = $imgname;
        $student->save();
        return back()->withSuccess('Student Details updated Successfully..!');
    }
}
