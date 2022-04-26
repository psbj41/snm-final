<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Special;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        foreach ($special as $key => $value) {
            $permission = $value->permission;
            $permission = json_decode($permission,true);
            $special->permission = $permission;
        }
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
        $permission = array();
        if(!empty($request->ssn)){
            $permission['ssn'] = $request->ssn;
            Log::info($permission['ssn']);
        }else{
            $permission['ssn'] = "off";
            Log::info($permission['ssn']);
        }
        if(!empty($request->snp)){
            $permission['snp'] = $request->snp;
            Log::info($permission['snp']);
        }else{
            $permission['snp'] = "off";
            Log::info($permission['snp']);
        }
        if(!empty($request->snm)){
            $permission['snm'] = $request->snm;
            Log::info($permission['snm']);
        }else{
            $permission['snm'] = "off";
            Log::info($permission['snm']);
        }
        if(!empty($request->snss)){
            $permission['snss'] = $request->snss;
            Log::info($permission['snss']);
        }else{
            $permission['snss'] = "off";
            Log::info($permission['snss']);
        }
        if(!empty($request->snsd)){
            $permission['snsd'] = $request->snsd;
            Log::info($permission['snsd']);
        }else{
            $permission['snsd'] = "off";
            Log::info($permission['snsd']);
        }
        if(!empty($request->snks)){
            $permission['snks'] = $request->snks;
            Log::info($permission['snks']);
        }else{
            $permission['snks'] = "off";
            Log::info($permission['snks']);
        }
        $permission = json_encode($permission);

        $special = new Special();
        $special->name = $request->name;
        $special->permission = $permission;
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
