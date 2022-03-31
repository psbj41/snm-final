<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $department = Department::all();
        return view('backend.pages.department.index',compact('department'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $department = new Department();
        $department->name = $request->name;
        $department->save();

        if ($request->hasFile('departmentpdf')) {
            $department->addMedia($request->departmentpdf)->toMediaCollection("departmentpdf");
        }

        return redirect()->route('department.index')->with('success', "Department Created Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        return view('backend.pages.department.edit',compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        $department->name = $request->name;
        $department->save();

        if ($request->hasFile('departmentpdf')) {
            $department->media()->delete();
            $department->addMedia($request->departmentpdf)->toMediaCollection("departmentpdf");
        }
        return redirect()->route('department.index')->with('success', "Department Updated Successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route('department.index')->with('success', "Department Deleted Successfully");

    }
}
