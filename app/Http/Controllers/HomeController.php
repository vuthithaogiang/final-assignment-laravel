<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $students = Student::orderBy("created_at", "desc")->paginate(12);
        return view("pages.home" , compact("students"));
    }

    public function form() {
        return view("pages.form");

    }

    public function create(Request $request){
        $request->validate([
            'sid'=> 'required|string|unique:students',
            'name'=>'required|min:6',
            'age'=> 'required',
            'address'=>'required|min:10',
            'telephone'=> "required|min:10"
        ],[
            'required'=>'Vui lòng nhập thông tin',
            'min'=>'Vui long nhap du ki tu'
        ]);

        $student = Student::create(
            [
                "sid"=>$request->get("sid"),
                "name"=>$request->get("name"),
                "age"=>$request->get("age"),
                "address"=>$request->get("address"),
                "telephone"=>$request->get("telephone"),
            ]
        );

        return redirect()->to("/")->with("success","Create student successfully");
    }
}
