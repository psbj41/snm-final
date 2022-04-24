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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\HeadingRowImport;
use Carbon\Carbon;
use DateTime;

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

    public function bhawanDataPage2(Request $request)
    {
        $search = $request['search'] ?? "";
        $day = $request['day'] ?? "";

        if($search != ""){
            $alldata = Bhawan::where('area','LIKE',"%$search%")->orwhere('day','LIKE',"%$search%")
            ->orwhere('time','LIKE',"%$search%")->orwhere('address','LIKE',"%$search%")
            ->orwhere('sector_sanyojak_name','LIKE',"%$search%")->orwhere('sector_sanyojak_contact','LIKE',"%$search%")
            ->orwhere('area_mukhi_1_name','LIKE',"%$search%")->orwhere('area_mukhi_1_contact','LIKE',"%$search%")
            ->orwhere('area_mukhi_2_name','LIKE',"%$search%")->orwhere('area_mukhi_2_contact','LIKE',"%$search%")
            ->orwhere('contact_person_1_name','LIKE',"%$search%")->orwhere('contact_person_1_contact','LIKE',"%$search%")
            ->orwhere('contact_person_2_name','LIKE',"%$search%")->orwhere('contact_person_2_contact','LIKE',"%$search%")
            ->orwhere('type_of_satsang','LIKE',"%$search%")->simplePaginate(1000);
        }else if($day != ""){
            $alldata = Bhawan::where('day','LIKE',"%$day%")->simplePaginate(1000);
        }else{
            $alldata = Bhawan::simplePaginate(12);
        }
        return view('backend.pages.upload.bhawan.index2',compact(['alldata','search','day']));
    }

    public function bhawanDataPageToday(Request $request)
    {
        $search = $request['search'] ?? "";
        $day = $request['day'] ?? "";
        $current_day = Carbon::now()->format("l");

        if($search != ""){
            $alldata = Bhawan::where('area','LIKE',"%$search%")->orwhere('day','LIKE',"%$search%")
            ->orwhere('time','LIKE',"%$search%")->orwhere('address','LIKE',"%$search%")
            ->orwhere('sector_sanyojak_name','LIKE',"%$search%")->orwhere('sector_sanyojak_contact','LIKE',"%$search%")
            ->orwhere('area_mukhi_1_name','LIKE',"%$search%")->orwhere('area_mukhi_1_contact','LIKE',"%$search%")
            ->orwhere('area_mukhi_2_name','LIKE',"%$search%")->orwhere('area_mukhi_2_contact','LIKE',"%$search%")
            ->orwhere('contact_person_1_name','LIKE',"%$search%")->orwhere('contact_person_1_contact','LIKE',"%$search%")
            ->orwhere('contact_person_2_name','LIKE',"%$search%")->orwhere('contact_person_2_contact','LIKE',"%$search%")
            ->orwhere('type_of_satsang','LIKE',"%$search%")->simplePaginate(1000);
        }else if($day != ""){
            $alldata = Bhawan::where('day','LIKE',"%$day%")->simplePaginate(1000);
        }
        else{
            $alldata = Bhawan::where('day','LIKE', "%$current_day%")->simplePaginate(12);
        }
        return view('backend.pages.upload.bhawan.index2',compact(['alldata','search','day','current_day']));
    }

    public function getSatsangDetails(){
        $search = '';
        $allbhwans = Bhawan::simplePaginate(12);
        return view('backend.pages.upload.bhawan.allsatsang',compact(['allbhwans','search']));
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
        Log::info('I am here');
        Log::info($request->file('file'));
        Excel::import(new UserImport, $request->file('file'));
        Log::info('I am here');

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
        $this_month = Carbon::now()->format('F');
        $this_month = substr($this_month,0,3);
        $last_month = Carbon::now()->subMonth()->format('F');
        $last_month = substr($last_month,0,3);
        $last_to_month = Carbon::now()->subMonth(2)->format('F');
        $last_to_month = substr($last_to_month,0,3);

        $data = Duty::where('Dutydate','NOT LIKE',"%$this_month%")->orwhere('Dutydate','NOT LIKE',"%$last_month%")->orwhere('Dutydate','NOT LIKE',"%$last_to_month%")->get();

        $data->each->delete();

        Excel::import(new DutyImport, $request->file('file'));
        return redirect()->route('duty.upload.page')->with('success', 'All good!');
    }

    public function dutyDataPage()
    {
        $alldata = Duty::all();
        return view('backend.pages.upload.dutylist.index',compact('alldata'));
    }

    public function dutyDataPage2(Request $request)
    {
        $search = $request['search'] ?? "";
        $month = $request['month'] ?? "";
        $month1 = $request['month'] ?? "";

        if($month != ""){
            $m = date('F', strtotime($request['month']));
            $m = substr($m, 0, 3);
            $y = Carbon::parse($request['month'])->year;
            $month = $m." ".$y;
        }

        if($search != ""){
            $alldata = Duty::where('Dutydate','LIKE',"%$search%")->orwhere('satsangname','LIKE',"%$search%")
            ->orwhere('SatsangAddress','LIKE',"%$search%")->orwhere('SatsangTime','LIKE',"%$search%")
            ->orwhere('satsangcontact','LIKE',"%$search%")->orwhere('PracharakName','LIKE',"%$search%")
            ->orwhere('PracharakContact','LIKE',"%$search%")->orwhere('SectorID','LIKE',"%$search%")
            ->orwhere('BranchID','LIKE',"%$search%")->orwhere('Day','LIKE',"%$search%")
            ->orwhere('Sangat_Day','LIKE',"%$search%")->simplePaginate(1000);
        }else if($month != ""){
            $alldata = Duty::where('Dutydate','LIKE',"%$month%")->simplePaginate(1000);
        }else{
            $alldata = Duty::simplePaginate(12);
        }
        return view('backend.pages.upload.dutylist.index2',compact(['alldata','search','month1']));
    }

    public function dutyDataPageMy(Request $request)
    {
        $search = $request['search'] ?? "";
        $month = $request['month'] ?? "";
        $month1 = $request['month'] ?? "";


        if($month != ""){
            $m = date('F', strtotime($request['month']));
            $m = substr($m, 0, 3);
            $y = Carbon::parse($request['month'])->year;
            $month = $m." ".$y;
        }

        if($search != ""){
            $alldata = Duty::where('Dutydate','LIKE',"%$search%")->orwhere('satsangname','LIKE',"%$search%")
            ->orwhere('SatsangAddress','LIKE',"%$search%")->orwhere('SatsangTime','LIKE',"%$search%")
            ->orwhere('satsangcontact','LIKE',"%$search%")->orwhere('PracharakName','LIKE',"%$search%")
            ->orwhere('PracharakContact','LIKE',"%$search%")->orwhere('SectorID','LIKE',"%$search%")
            ->orwhere('BranchID','LIKE',"%$search%")->orwhere('Day','LIKE',"%$search%")
            ->orwhere('Sangat_Day','LIKE',"%$search%")->simplePaginate(1000);
        }else if($month != ""){
            $alldata = Duty::where('Dutydate',"LIKE","%$month%")->simplePaginate(1000);
        }
        else{
            $alldata = Duty::where('PracharakContact',"=",Auth::user()->phone)->simplePaginate(12);
        }
        return view('backend.pages.upload.dutylist.index2',compact(['alldata','search','month1']));
    }

    public function dutyDataPageGs(Request $request)
    {
        $search = $request['search'] ?? "";
        $month = $request['month'] ?? "";
        $month1 = $request['month'] ?? "";


        if($month != ""){
            $m = date('F', strtotime($request['month']));
            $m = substr($m, 0, 3);
            $y = Carbon::parse($request['month'])->year;
            $month = $m." ".$y;
        }

        if($search != ""){
            $alldata = Duty::where('Dutydate','LIKE',"%$search%")->orwhere('satsangname','LIKE',"%$search%")
            ->orwhere('SatsangAddress','LIKE',"%$search%")->orwhere('SatsangTime','LIKE',"%$search%")
            ->orwhere('satsangcontact','LIKE',"%$search%")->orwhere('PracharakName','LIKE',"%$search%")
            ->orwhere('PracharakContact','LIKE',"%$search%")->orwhere('SectorID','LIKE',"%$search%")
            ->orwhere('BranchID','LIKE',"%$search%")->orwhere('Day','LIKE',"%$search%")
            ->orwhere('Sangat_Day','LIKE',"%$search%")->simplePaginate(1000);
        }else if($month != ""){
            $alldata = Duty::where('Dutydate',"LIKE","%$month%")->simplePaginate(1000);
        }
        else{
            $alldata = Duty::where('PracharakContact',"=",Auth::user()->phone)->simplePaginate(12);
        }
        return view('backend.pages.upload.dutylist.index2',compact(['alldata','search','month1']));
    }

    public function dutyDataPageNs(Request $request)
    {
        $search = $request['search'] ?? "";
        $month = $request['month'] ?? "";
        $month1 = $request['month'] ?? "";


        if($month != ""){
            $m = date('F', strtotime($request['month']));
            $m = substr($m, 0, 3);
            $y = Carbon::parse($request['month'])->year;
            $month = $m." ".$y;
        }

        if($search != ""){
            $alldata = Duty::where('Dutydate','LIKE',"%$search%")->orwhere('satsangname','LIKE',"%$search%")
            ->orwhere('SatsangAddress','LIKE',"%$search%")->orwhere('SatsangTime','LIKE',"%$search%")
            ->orwhere('satsangcontact','LIKE',"%$search%")->orwhere('PracharakName','LIKE',"%$search%")
            ->orwhere('PracharakContact','LIKE',"%$search%")->orwhere('SectorID','LIKE',"%$search%")
            ->orwhere('BranchID','LIKE',"%$search%")->orwhere('Day','LIKE',"%$search%")
            ->orwhere('Sangat_Day','LIKE',"%$search%")->simplePaginate(1000);
        }else if($month != ""){
            $alldata = Duty::where('Dutydate',"LIKE","%$month%")->simplePaginate(1000);
        }
        else{
            $alldata = Duty::where('PracharakContact',"=",Auth::user()->phone)->simplePaginate(12);
        }
        return view('backend.pages.upload.dutylist.index2',compact(['alldata','search','month1']));
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

    //End Administrator

}
