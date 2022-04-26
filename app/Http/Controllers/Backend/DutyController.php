<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Duty;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DutyController extends Controller
{
    public function all(Request $request)
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
            $alldata = Duty::where('Dutydatedata','LIKE',"%$search%")
            ->orwhere('SatsangID','LIKE',"%$search%")
            ->orwhere('satsangname','LIKE',"%$search%")
            ->orwhere('SatsangAddress','LIKE',"%$search%")
            ->orwhere('SatsangTime','LIKE',"%$search%")
            ->orwhere('satsangcontact','LIKE',"%$search%")
            ->orwhere('PracharakID','LIKE',"%$search%")
            ->orwhere('PracharakName','LIKE',"%$search%")
            ->orwhere('PracharakContact','LIKE',"%$search%")
            ->orwhere('SectorID','LIKE',"%$search%")
            ->orwhere('BranchID','LIKE',"%$search%")
            ->orwhere('Day','LIKE',"%$search%")
            ->orwhere('Sangat_Day','LIKE',"%$search%")
            ->orwhere('Dutydate','LIKE',"%$search%")
            ->orwhere('Satsang_Type','=',"GS")
            ->simplePaginate(1000);
        }else if($month != ""){
            $alldata = Duty::where('Dutydatedata','LIKE',"%$month%")->simplePaginate(1000);
        }else{
            $alldata = Duty::simplePaginate(12);
        }
        return view('backend.pages.upload.dutylist.index2',compact(['alldata','search','month1']));
    }

    public function nari(Request $request)
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

            $alldata = Duty::where('Satsang_Type','=',"NS")
            ->whereNot(function ($query) {
                $query->where('Satsang_Type', "=", "GS");
            })
            ->orwhere('Dutydatedata','LIKE',"%$search%")
            ->orwhere('SatsangID','LIKE',"%$search%")
            ->orwhere('satsangname','LIKE',"%$search%")
            ->orwhere('SatsangAddress','LIKE',"%$search%")
            ->orwhere('SatsangTime','LIKE',"%$search%")
            ->orwhere('satsangcontact','LIKE',"%$search%")
            ->orwhere('PracharakID','LIKE',"%$search%")
            ->orwhere('PracharakName','LIKE',"%$search%")
            ->orwhere('PracharakContact','LIKE',"%$search%")
            ->orwhere('SectorID','LIKE',"%$search%")
            ->orwhere('BranchID','LIKE',"%$search%")
            ->orwhere('Day','LIKE',"%$search%")
            ->orwhere('Sangat_Day','LIKE',"%$search%")
            ->orwhere('Dutydate','LIKE',"%$search%")
            ->simplePaginate(1000);
        }else if($month != ""){
            $alldata = Duty::where('Dutydate','LIKE',"%$month%")->simplePaginate(1000);
        }else{
            $alldata = Duty::where('Satsang_Type', "=", "NS")->simplePaginate(12);
        }
        return view('backend.pages.upload.dutylist.nari', compact(['alldata','search','month1']));
    }

    public function pracharakDuty(Request $request)
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
            $alldata = Duty::where('Dutydatedata','LIKE',"%$search%")
            ->orwhere('SatsangID','LIKE',"%$search%")
            ->orwhere('satsangname','LIKE',"%$search%")
            ->orwhere('SatsangAddress','LIKE',"%$search%")
            ->orwhere('SatsangTime','LIKE',"%$search%")
            ->orwhere('satsangcontact','LIKE',"%$search%")
            ->orwhere('PracharakID','LIKE',"%$search%")
            ->orwhere('PracharakName','LIKE',"%$search%")
            ->orwhere('PracharakContact','LIKE',"%$search%")
            ->orwhere('SectorID','LIKE',"%$search%")
            ->orwhere('BranchID','LIKE',"%$search%")
            ->orwhere('Day','LIKE',"%$search%")
            ->orwhere('Sangat_Day','LIKE',"%$search%")
            ->orwhere('Dutydate','LIKE',"%$search%")
            ->orwhere('Satsang_Type','LIKE',"%$search%")
            ->simplePaginate(1000);
        }else if($month != ""){
            $alldata = Duty::where('Dutydate','LIKE',"%$month%")->simplePaginate(1000);
        }else{
            $alldata = Duty::where('PracharakContact',"=",Auth::user()->phone)->simplePaginate(12);
        }
        return view('backend.pages.upload.dutylist.pracharak',compact(['alldata','search','month1']));
    }

    public function pracharikaDuty(Request $request)
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
            $alldata = Duty::where('Dutydatedata','LIKE',"%$search%")
            ->orwhere('SatsangID','LIKE',"%$search%")
            ->orwhere('satsangname','LIKE',"%$search%")
            ->orwhere('SatsangAddress','LIKE',"%$search%")
            ->orwhere('SatsangTime','LIKE',"%$search%")
            ->orwhere('satsangcontact','LIKE',"%$search%")
            ->orwhere('PracharakID','LIKE',"%$search%")
            ->orwhere('PracharakName','LIKE',"%$search%")
            ->orwhere('PracharakContact','LIKE',"%$search%")
            ->orwhere('SectorID','LIKE',"%$search%")
            ->orwhere('BranchID','LIKE',"%$search%")
            ->orwhere('Day','LIKE',"%$search%")
            ->orwhere('Sangat_Day','LIKE',"%$search%")
            ->orwhere('Dutydate','LIKE',"%$search%")
            ->orwhere('Satsang_Type','LIKE',"%$search%")
            ->simplePaginate(1000);
        }else if($month != ""){
            $alldata = Duty::where('Dutydate','LIKE',"%$month%")->simplePaginate(1000);
        }else{
            $alldata = Duty::simplePaginate(12);
        }
        return view('backend.pages.upload.dutylist.pracharika', compact(['alldata','search','month1']));
    }

    public function mukhiGeneral(Request $request)
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
            $alldata = Duty::where('Dutydatedata','LIKE',"%$search%")
            ->orwhere('SatsangID','LIKE',"%$search%")
            ->orwhere('satsangname','LIKE',"%$search%")
            ->orwhere('SatsangAddress','LIKE',"%$search%")
            ->orwhere('SatsangTime','LIKE',"%$search%")
            ->orwhere('satsangcontact','LIKE',"%$search%")
            ->orwhere('PracharakID','LIKE',"%$search%")
            ->orwhere('PracharakName','LIKE',"%$search%")
            ->orwhere('PracharakContact','LIKE',"%$search%")
            ->orwhere('SectorID','LIKE',"%$search%")
            ->orwhere('BranchID','LIKE',"%$search%")
            ->orwhere('Day','LIKE',"%$search%")
            ->orwhere('Sangat_Day','LIKE',"%$search%")
            ->orwhere('Dutydate','LIKE',"%$search%")
            ->orwhere('Satsang_Type','LIKE',"%$search%")
            ->simplePaginate(1000);
        }else if($month != ""){
            $alldata = Duty::where('Dutydate','LIKE',"%$month%")->simplePaginate(1000);
        }else{
            $alldata = Duty::where('satsangcontact','LIKE',Auth::user()->phone)->simplePaginate(12);
        }
        return view('backend.pages.upload.dutylist.mukhig',compact(['alldata','search','month1']));
    }

    public function mukhiNari(Request $request)
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
            $alldata = Duty::where('Dutydatedata','LIKE',"%$search%")
            ->orwhere('SatsangID','LIKE',"%$search%")
            ->orwhere('satsangname','LIKE',"%$search%")
            ->orwhere('SatsangAddress','LIKE',"%$search%")
            ->orwhere('SatsangTime','LIKE',"%$search%")
            ->orwhere('satsangcontact','LIKE',"%$search%")
            ->orwhere('PracharakID','LIKE',"%$search%")
            ->orwhere('PracharakName','LIKE',"%$search%")
            ->orwhere('PracharakContact','LIKE',"%$search%")
            ->orwhere('SectorID','LIKE',"%$search%")
            ->orwhere('BranchID','LIKE',"%$search%")
            ->orwhere('Day','LIKE',"%$search%")
            ->orwhere('Sangat_Day','LIKE',"%$search%")
            ->orwhere('Dutydate','LIKE',"%$search%")
            ->orwhere('Satsang_Type','LIKE',"%$search%")
            ->simplePaginate(1000);
        }else if($month != ""){
            $alldata = Duty::where('Dutydate','LIKE',"%$month%")->simplePaginate(1000);
        }else{
            $alldata = Duty::simplePaginate(12);
        }
        return view('backend.pages.upload.dutylist.mukhin',compact(['alldata','search','month1']));
    }

    public function sanyojakGeneral(Request $request)
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
            $alldata = Duty::where('Dutydatedata','LIKE',"%$search%")
            ->orwhere('SatsangID','LIKE',"%$search%")
            ->orwhere('satsangname','LIKE',"%$search%")
            ->orwhere('SatsangAddress','LIKE',"%$search%")
            ->orwhere('SatsangTime','LIKE',"%$search%")
            ->orwhere('satsangcontact','LIKE',"%$search%")
            ->orwhere('PracharakID','LIKE',"%$search%")
            ->orwhere('PracharakName','LIKE',"%$search%")
            ->orwhere('PracharakContact','LIKE',"%$search%")
            ->orwhere('SectorID','LIKE',"%$search%")
            ->orwhere('BranchID','LIKE',"%$search%")
            ->orwhere('Day','LIKE',"%$search%")
            ->orwhere('Sangat_Day','LIKE',"%$search%")
            ->orwhere('Dutydate','LIKE',"%$search%")
            ->orwhere('Satsang_Type','LIKE',"%$search%")
            ->simplePaginate(1000);
        }else if($month != ""){
            $alldata = Duty::where('Dutydate','LIKE',"%$month%")->simplePaginate(1000);
        }else{
            $alldata = Duty::simplePaginate(12);
        }
        return view('backend.pages.upload.dutylist.sanyojakg',compact(['alldata','search','month1']));
    }

    public function sanyojakNari(Request $request)
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
            $alldata = Duty::where('Dutydatedata','LIKE',"%$search%")
            ->orwhere('SatsangID','LIKE',"%$search%")
            ->orwhere('satsangname','LIKE',"%$search%")
            ->orwhere('SatsangAddress','LIKE',"%$search%")
            ->orwhere('SatsangTime','LIKE',"%$search%")
            ->orwhere('satsangcontact','LIKE',"%$search%")
            ->orwhere('PracharakID','LIKE',"%$search%")
            ->orwhere('PracharakName','LIKE',"%$search%")
            ->orwhere('PracharakContact','LIKE',"%$search%")
            ->orwhere('SectorID','LIKE',"%$search%")
            ->orwhere('BranchID','LIKE',"%$search%")
            ->orwhere('Day','LIKE',"%$search%")
            ->orwhere('Sangat_Day','LIKE',"%$search%")
            ->orwhere('Dutydate','LIKE',"%$search%")
            ->orwhere('Satsang_Type','LIKE',"%$search%")
            ->simplePaginate(1000);
        }else if($month != ""){
            $alldata = Duty::where('Dutydate','LIKE',"%$month%")->simplePaginate(1000);
        }else{
            $alldata = Duty::simplePaginate(12);
        }
        return view('backend.pages.upload.dutylist.sanyojakn',compact(['alldata','search','month1']));
    }
}
