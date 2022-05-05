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
        return redirect()->route('thought.upload.page')->with('success', 'Thoughts Data Uploaded Successfully');
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
        return redirect()->route('bhawan.upload.page')->with('success', 'Bhawan Data Uploaded Successfully');
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
        $current_day_name = Carbon::now()->format("l");
        if ($current_day == 'Sunday') {
            $current_day = '1';
        }else if ($current_day == 'Monday') {
            $current_day = '2';
        }else if ($current_day == 'Tuesday') {
            $current_day = '3';
        }else if ($current_day == 'Wednesday') {
            $current_day = '4';
        }else if ($current_day == 'Thursday') {
            $current_day = '5';
        }else if ($current_day == 'Friday') {
            $current_day = '6';
        }else {
            $current_day = '7';
        }
        if($search != ""){
            // Log::info($current_day);
            $alldata = Bhawan::where(function ($query) use ($search){
                $query->orwhere('SatsangName','LIKE',"%$search%")
                ->orwhere('SatsangAddress','LIKE',"%$search%")
                ->orwhere('SatsangContact','LIKE',"%$search%")
                ->orwhere('SatsangName','LIKE',"%$search%")
                ->orwhere('Time','LIKE',"%$search%")
                ->orwhere('Area','LIKE',"%$search%")
                ->orwhere('BranchID','LIKE',"%$search%")
                ->orwhere('IsActive','LIKE',"%$search%")
                ->orwhere('Satsang_Time_Type','LIKE',"%$search%")
                ->orwhere('Satsang_Type','LIKE',"%$search%");
            })
            ->where('Day','=', $current_day)->simplePaginate(1000);
        }else if($day != ""){
            $alldata = Bhawan::where('Day','LIKE',"%$day%")->simplePaginate(1000);
        }
        else{
            $alldata = Bhawan::where('Day','=', $current_day)->simplePaginate(12);
        }
        return view('backend.pages.upload.bhawan.day',compact(['alldata','search','day','current_day','current_day_name']));
    }

    public function getSatsangDetails(){
        $search = '';
        $day = '';
        $allbhwans = Bhawan::simplePaginate(12);
        return view('backend.pages.upload.bhawan.allsatsang',compact(['allbhwans','search','day']));
    }

    // End Bhawan upload page

    // Admin upload page
    public function uploadAdminPage()
    {
        return view('backend.pages.upload.admin.admin');
    }

    public function uploadAdminStore(Request $request)
    {
        $oldData = User::all()->except([1,2,3]);
        $oldData->each->delete();
        Excel::import(new UserImport, $request->file('file'));
        return redirect()->route('admin.upload.page')->with('success', 'Admin Data Uploaded Successfully');
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
        // $this_month = Carbon::now()->format('F');
        // $this_month = substr($this_month,0,3);
        // $last_month = Carbon::now()->subMonth()->format('F');
        // $last_month = substr($last_month,0,3);
        // $last_to_month = Carbon::now()->subMonth(2)->format('F');
        // $last_to_month = substr($last_to_month,0,3);

        // $data = Duty::where('Dutydate','NOT LIKE',"%$this_month%")->orwhere('Dutydate','NOT LIKE',"%$last_month%")->orwhere('Dutydate','NOT LIKE',"%$last_to_month%")->get();

        // $headings = (new HeadingRowImport)->toArray($request->file('file'));
        // Log::info($headings);
        // return;

        $data = Duty::all();
        $data->each->delete();
        Excel::import(new DutyImport, $request->file('file'));
        return redirect()->route('duty.upload.page')->with('success', 'Duty Data Uploaded Successfully');
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

    public function administrationDetails(Request $request)
    {
        $search = $request['search'] ?? "";
        $mukhi = $request['mukhi'] ?? "";
        $sanyojak = $request['sanyojak'] ?? "";
        $sewadal = $request['sewadal'] ?? "";
        $kshetriya = $request['kshetriya'] ?? "";

        if($search != ""){
            $alldata = User::where(function ($query) use ($search){
                $query->orwhere('PracharakID','LIKE',"%$search%")
                ->orwhere('name','LIKE',"%$search%")
                ->orwhere('Gyan_Pracharak','LIKE',"%$search%")
                ->orwhere('Email_ID','LIKE',"%$search%")
                ->orwhere('phone','LIKE',"%$search%")
                ->orwhere('Gender','LIKE',"%$search%")
                ->orwhere('Area','LIKE',"%$search%")
                ->orwhere('BranchID','LIKE',"%$search%");
            })
            ->where('role','=','access')->simplePaginate(1000);
        }else if($mukhi != ""){
            $alldata = User::where('role','=','access')->where('Area_Mukhi_Branch_Incharge',"Y")->simplePaginate(12);
        }else if($sanyojak != ""){
            $alldata = User::where('role','=','access')->where('Sector_Sanyojak',"Y")->simplePaginate(12);
        }else if($sewadal != ""){
            $alldata = User::where('role','=','access')->where('Sewadal_Sanchalak', "Y")->simplePaginate(12);
        }else if($kshetriya != ""){
            $alldata = User::where('role','=','access')->where('K_Sanchalak', "Y")->simplePaginate(12);
        }else{
            $alldata = User::where('role','=','access')->orwhere('Area_Mukhi_Branch_Incharge', "Y")->orwhere('Sector_Sanyojak', "Y")->orwhere('Sewadal_Sanchalak', "Y")->orwhere('K_Sanchalak', "Y")->simplePaginate(12);
        }
        return view('backend.pages.upload.administratived',compact(['alldata','search']));
    }
    //End Administrator

    public function pracharakDetails(Request $request)
    {
        $search = $request['search'] ?? "";
        $month = $request['month'] ?? "";
        $month1 = $request['month'] ?? "";
        $pracharak = $request['Pracharak'] ?? "";
        $pracharika = $request['Pracharika'] ?? "";
        $gyanpracharak = $request['GyanPracharak'] ?? "";

        if($month != ""){
            $m = date('F', strtotime($request['month']));
            $m = substr($m, 0, 3);
            $y = Carbon::parse($request['month'])->year;
            $month = $m." ".$y;
        }

        if($search != ""){
            $alldata = User::where(function ($query) use ($search){
                $query->orwhere('PracharakID','LIKE',"%$search%")
                ->orwhere('name','LIKE',"%$search%")
                ->orwhere('Gyan_Pracharak','LIKE',"%$search%")
                ->orwhere('Email_ID','LIKE',"%$search%")
                ->orwhere('phone','LIKE',"%$search%")
                ->orwhere('Gender','LIKE',"%$search%")
                ->orwhere('Area','LIKE',"%$search%")
                ->orwhere('BranchID','LIKE',"%$search%");
            })
            ->where('role','=','access')->simplePaginate(1000);
        }else if($month != ""){
            $alldata = User::where('Dutydate','LIKE',"%$month%")->simplePaginate(1000);
        }else if($pracharak != ""){
            Log::info("i aaa");
            $alldata = User::where('role','=','access')->where('Gender',"M")->simplePaginate(12);
        }else if($pracharika != ""){
            $alldata = User::where('role','=','access')->where('Gender',"F")->simplePaginate(12);
        }else if($gyanpracharak != ""){
            $alldata = User::where('role','=','access')->where('Gyan_Pracharak',"!=", null)->simplePaginate(12);
        }else{
            $alldata = User::where('role','=','access')->simplePaginate(12);
        }
        return view('backend.pages.upload.pracharakd',compact(['alldata','search','month1']));
    }
}
