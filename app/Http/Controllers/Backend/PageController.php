<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Imports\BhawanImport;
use App\Imports\ThoughtImport;
use App\Imports\UserImport;
use App\Models\Bhawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\HeadingRowImport;

class PageController extends Controller
{
    public function uploadPage()
    {
        return view('backend.pages.upload.index');
    }


    public function uploadThoughtPage()
    {
        return view('backend.pages.upload.thought');
    }

    public function uploadThoughtStore(Request $request)
    {
        Excel::import(new ThoughtImport, $request->file('file'));
        return redirect()->route('thought.upload.page')->with('success', 'All good!');
    }

    public function uploadBhawanPage()
    {
        return view('backend.pages.upload.bhawan');
    }

    public function uploadBhawanStore(Request $request)
    {
        $bhawan = Bhawan::all();
        $bhawan->each->delete();
        Excel::import(new BhawanImport, $request->file('file'));
        return redirect()->route('bhawan.upload.page')->with('success', 'All good!');
    }

    public function uploadAdminPage()
    {
        return view('backend.pages.upload.admin');
    }

    public function uploadAdminStore(Request $request)
    {
        Excel::import(new UserImport, $request->file('file'));
        return redirect()->route('admin.upload.page')->with('success', 'All good!');
    }
}
