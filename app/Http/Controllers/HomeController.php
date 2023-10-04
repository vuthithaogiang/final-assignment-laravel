<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $students = Student::orderBy("created_at", "desc")->paginate(20);
        return view("pages.home" , compact("students"));
    }

    public function form() {
        return view("pages.form");

    }

    public function create(Request $request){
        $request->validate([
            'sid'=> 'required|string|unique:students',
            'name'=>'required',
            'age'=> 'required|min:18',
            'address'=>'required',
            'telephone'=> "required"
        ],[
            'required'=>'Vui lòng nhập thông tin',
        ]);

        $student = Student::create(
            [
                "sid"=>$request->get("sid"),
                "name"=>$request->get("name"),
                "address"=>$request->get("address"),
                "telephone"=>$request->get("telephone"),
            ]
        );

        return redirect()->to("/")->with("success","Create student successfully");
    }
}
