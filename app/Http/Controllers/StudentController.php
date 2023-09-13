<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Session;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public $student;

    public function addStudent(){
        return view('create',[
           'departments'=> Department::where('status',1)->get(),
           'sessions'=> Session::all(),
        ]);
    }
    public function store(Request $request){
        Student::saveInfo($request);
        return redirect(route('manage-student'));

    }

    public function manageStudent(){
        return view('manage',[
            'students'=>Student::all()
        ]);
    }
    public function edit($id){
        return view('edit',[
            'departments'=> Department::where('status',1)->get(),
            'sessions'=> Session::all(),
            'student'=>Student::find($id)
        ]);
    }
    public function update(Request $request){
        Student::updateInfo($request);
        return redirect(route('manage-student'));
    }
    public function deleteInfo(Request $request){
       $this->student = Student::find($request->id);
            if ($this->student->image) {
                if (file_exists($this->student->image)) {
                    unlink($this->student->image);
                }
            }
       $this->student->delete();
       return back();
    }
}
