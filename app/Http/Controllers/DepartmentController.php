<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('department.index',[
            'departments'=>Department::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Department::saveInfo($request);
        return redirect(route("departments.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        Department::statusCheck($id);
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return view('department.edit',[
            'department'=>Department::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        Department::saveInfo($request,$id);
        return redirect(route("departments.index"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $dept = Department::find($id);
        $dept->delete();
        return redirect(route("departments.index"));
    }
    public function deptWiseStudent($id)
    {
        return view('department.dept-wise-student',[
            'departments'=>Department::find($id)
        ]);
      
    }
 
}
