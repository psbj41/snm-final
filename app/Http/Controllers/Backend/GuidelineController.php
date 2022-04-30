<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Guideline;
use Illuminate\Http\Request;

class GuidelineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guideline = Guideline::all();
        return view('backend.pages.guideline.index',compact('guideline'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.guideline.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $guideline = Guideline::create($request->all());
        if ($request->hasFile('guidelinepdf')) {
            $guideline->addMedia($request->guidelinepdf)->toMediaCollection("guidelinepdf");
        }
        return redirect()->route('guideline.index')->with('success', "Guideline Created Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guideline = Guideline::all();
        return view('backend.pages.guideline.show',compact('guideline'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $guideline
     * @return \Illuminate\Http\Response
     */
    public function edit(Guideline $guideline)
    {
        return view('backend.pages.guideline.edit',compact('guideline'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $guideline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guideline $guideline)
    {
        $guideline->update([
            'name' => $request->name,
            'ssn' => $request->ssn,
            'snp' => $request->snp,
            'snm' => $request->snm,
            'snss' => $request->snss,
            'snsd' => $request->snsd,
            'snks' => $request->snks,
            'sngp' => $request->sngp,
        ]);
        if ($request->hasFile('guidelinepdf')) {
            $guideline->media()->delete();
            $guideline->addMedia($request->guidelinepdf)->toMediaCollection("guidelinepdf");
        }
        return redirect()->route('guideline.index')->with('success', "Guideline Updated Successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $guideline
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guideline $guideline)
    {
        $guideline->delete();
        return redirect()->route('guideline.index')->with('success', "Guideline Deleted Successfully");

    }
}
