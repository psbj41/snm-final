<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Imports\BhawanImport;
use App\Imports\DutyImport;
use App\Imports\ThoughtImport;
use App\Imports\UserImport;
use App\Models\Bhawan;
use App\Models\Duty;
use App\Models\Thought;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\HeadingRowImport;

class PageController extends Controller
{
    // index upload page
    public function uploadPage()
    {
        return view('backend.pages.upload.index');
    }
    // End index upload page

    // Thought upload page
    public function uploadThoughtPage()
    {
        return view('backend.pages.upload.thought.thought');
    }

    public function uploadThoughtStore(Request $request)
    {
        Excel::import(new ThoughtImport, $request->file('file'));
        return redirect()->route('thought.upload.page')->with('success', 'All good!');
    }

    public function thoughtDataPage()
    {
        $alldata = Thought::all();
        return view('backend.pages.upload.thought.index',compact('alldata'));
    }
    // End Thought upload page


    // Bhawan upload page
    public function uploadBhawanPage()
    {
        return view('backend.pages.upload.bhawan.bhawan');
    }

    public function uploadBhawanStore(Request $request)
    {
        $bhawan = Bhawan::all();
        $bhawan->each->delete();
        Excel::import(new BhawanImport, $request->file('file'));
        return redirect()->route('bhawan.upload.page')->with('success', 'All good!');
    }

    public function bhawanDataPage()
    {
        $alldata = Bhawan::all();
        return view('backend.pages.upload.bhawan.index',compact('alldata'));
    }
    // End Bhawan upload page

    // Admin upload page
    public function uploadAdminPage()
    {
        return view('backend.pages.upload.admin.admin');
    }

    public function uploadAdminStore(Request $request)
    {
        $oldData = User::where('id',"!=","1")->get();
        $oldData->each->delete();
        Excel::import(new UserImport, $request->file('file'));
        return redirect()->route('admin.upload.page')->with('success', 'All good!');
    }

    public function adminDataPage()
    {
        $alldata = User::all();
        return view('backend.pages.upload.admin.index',compact('alldata'));
    }
    // End Admin upload page


    // Admin upload page
    public function uploadDutyPage()
    {
        return view('backend.pages.upload.dutylist.dutylist');
    }

    public function uploadDutyStore(Request $request)
    {
        Excel::import(new DutyImport, $request->file('file'));
        return redirect()->route('duty.upload.page')->with('success', 'All good!');
    }

    public function dutyDataPage()
    {
        $alldata = Duty::all();
        return view('backend.pages.upload.dutylist.index',compact('alldata'));
    }
    // End Admin upload page

    //Administration
    public function administrationPage()
    {
        return view('backend.pages.administration.index');
    }

    public function administrationpracharakPage()
    {
        $alldata = User::where('gender',"=","M")->where('designation', "=","Pracharak")->get();
        return view('backend.pages.administration.pracharak',compact('alldata'));
    }

    public function administrationpracharikaPage()
    {
        $alldata = User::where('gender',"=","F")->where('designation', "=","Pracharika")->get();
        return view('backend.pages.administration.pracharika',compact('alldata'));
    }

    public function administrationsanyojakPage()
    {
        $alldata = Duty::all();
        return view('backend.pages.administration.sanyojak',compact('alldata'));
    }

    public function administrationgyanPage()
    {
        $alldata = Duty::all();
        return view('backend.pages.administration.gyan',compact('alldata'));
    }

    public function administrationdepartmentPage()
    {
        $alldata = Duty::all();
        return view('backend.pages.administration.department',compact('alldata'));
    }
}
