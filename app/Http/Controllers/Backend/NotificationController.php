<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Special;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NotificationController extends Controller
{
    public function sangat()
    {
        $search = '';
        $month1 = '';
        $alldata = Special::where('ssn',"=","on")->get();
        return view('backend.pages.notification.specialsatsang',compact(['search','month1','alldata']));
    }

    public function pracharak()
    {
        $search = '';
        $month1 = '';
        $alldata = Special::where('snp',"=","on")->get();
        return view('backend.pages.notification.pracharak',compact(['search','month1','alldata']));
    }

    public function gyanPracharak()
    {
        $search = '';
        $month1 = '';
        $alldata = Special::where('sngp',"=","on")->get();
        return view('backend.pages.notification.gyanpracharak',compact(['search','month1','alldata']));
    }

    public function mukhi()
    {
        $search = '';
        $month1 = '';
        $alldata = Special::where('snm',"=","on")->get();
        return view('backend.pages.notification.mukhi',compact(['search','month1','alldata']));
    }

    public function sanyojak()
    {
        $search = '';
        $month1 = '';
        $alldata = Special::where('snss',"=","on")->get();
        return view('backend.pages.notification.sanyojak',compact(['search','month1','alldata']));
    }

    public function sewadal()
    {
        $search = '';
        $month1 = '';
        $alldata = Special::where('snsd',"=","on")->get();
        return view('backend.pages.notification.sewadal',compact(['search','month1','alldata']));
    }

    public function kshetriya()
    {
        $search = '';
        $month1 = '';
        $alldata = Special::where('snks',"=","on")->get();
        return view('backend.pages.notification.kshetriya',compact(['search','month1','alldata']));
    }
}
