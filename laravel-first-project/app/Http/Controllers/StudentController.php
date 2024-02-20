<?php

namespace App\Http\Controllers;

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

    public function registerStudent(){
        return view("registerStudent");
    }
    public function createstudent(Request $request){
        print_r($request->all());
        $request->validate([
            "username"=>"required",
            "email"=>"required | email",
            "contact"=>"required",
            "city"=>"required",
            "image"=>"required |mimes:png,jpg,jpeg |max:100000",

        ]);

        return view("registerStudent");
    }

   
}
