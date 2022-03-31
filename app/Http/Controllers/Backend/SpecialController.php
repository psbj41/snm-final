<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Special;
use Illuminate\Http\Request;

class SpecialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $special = Special::all();
        return view('backend.pages.special.index',compact('special'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.special.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $special = new Special();
        $special->name = $request->name;
        $special->save();

        if ($request->hasFile('specialpdf')) {
            $special->addMedia($request->specialpdf)->toMediaCollection("specialpdf");
        }

        return redirect()->route('special.index')->with('success', "Special Created Successfully");
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
     * @param  int  $special
     * @return \Illuminate\Http\Response
     */
    public function edit(Special $special)
    {
        return view('backend.pages.special.edit',compact('special'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $special
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Special $special)
    {
        $special->name = $request->name;
        $special->save();

        if ($request->hasFile('specialpdf')) {
            $special->media()->delete();
            $special->addMedia($request->specialpdf)->toMediaCollection("specialpdf");
        }
        return redirect()->route('special.index')->with('success', "Special Updated Successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $special
     * @return \Illuminate\Http\Response
     */
    public function destroy(Special $special)
    {
        $special->delete();
        return redirect()->route('special.index')->with('success', "Special Deleted Successfully");

    }
}
