@extends('backend.layouts.master')

@section('title')
Duty List Table
@endsection

@section('css')

@endsection

@section('content')

<div class="page-content" id="dutylistscroll">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Duty List</h4>
                    <a href="{{route('dashboard')}}" class="btn btn-primary" style="width:40%; margin-bottom: 10px">Home Page</a>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div>
                <form action="">
                    <input type="search" value="{{$search}}" style="width:100%; border:1px solid rgb(206, 206, 206); outline:none; padding:8px; border-radius:5px; margin-bottom:10px" placeholder="Search by typing" name="search">
                    <div style="display: flex; justify-content:space-between; margin-bottom:10px">
                        <button style="width:49%;" class="btn btn-success">Search by typing</button>
                        <a href="{{route('bhawan.data.page2')}}" style="width:49%;" class="btn btn-danger">Reset</a>
                    </div>
                </form>
                <form action="">
                    <div class="row">
                        <div class="col-sm-12">
                            <select class="form-control" type="month" name="day"
                                id="example-month-input">
                                <option value="Select">Select Day</option>
                                <option value="Monday" @if($day == 'Monday') selected @endif>Monday</option>
                                <option value="Tuesday" @if($day == 'Tuesday')selected @endif>Tuesday</option>
                                <option value="Wednesday" @if($day == 'Wednesday')selected @endif>Wednesday</option>
                                <option value="Thursday" @if($day == 'Thursday')selected @endif>Thursday</option>
                                <option value="Friday" @if($day == 'Friday')selected @endif>Friday</option>
                                <option value="Saturday" @if($day == 'Saturday')selected @endif>Saturday</option>
                                <option value="Sunday" @if($day == 'Sunday')selected @endif>Sunday</option>
                            </select>
                        </div>
                    </div>
                    <div style="display: flex; justify-content:space-between; margin:10px 0px">
                        <button style="width:49%;" class="btn btn-success">Search by Month and Year</button>
                        <a href="{{route('bhawan.data.page2')}}" style="width:49%;" class="btn btn-danger">Reset</a>
                    </div>
                </form>
                <div class="text-center" style="display: flex; justify-content: center; align-items: center;">
                        <form action="" style="padding: 10px;">
                            <a href="{{route('bhawan.data.page2')}}" class="btn btn-success">
                                All Sangat
                            </a>
                        </form>
                        <form action="">
                            <a href="{{route('bhawan.data.today.page')}}" class="btn btn-info">
                                Todays Sangat
                            </a>
                        </form>
                </div>
                @if (!empty($current_day))
                <div class="day">
                    <h3 class="text-center">{{$current_day}}</h3>
                </div>
                @endif
            </div>
            <span style="margin-bottom: 10px"></span>
            @foreach ($alldata as $item)
            <div class="col-lg-4">
                <div class="card m-b-30">
                    <div class="card-body">

                        <div class="d-flex align-items-center">

                            <div class="flex-grow-1">
                                <table class="table">
                                    <style>
                                        p{
                                            margin: 0px;
                                            padding: 0px;
                                        }
                                        h6{
                                            margin: 0px;
                                            padding: 0px;
                                        }
                                    </style>
                                    <div style="display:flex;align-items:center">
                                        <i class="ri-map-pin-line" style="font-size:40px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Area</h6>
                                            <p class="content-p">{{$item->area}}</p>
                                        </div>
                                    </div>
                                    <div style="display:flex;align-items:center">
                                        <i class="ri-road-map-line" style="font-size:40px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Satsang Address</h6>
                                            <p class="content-p">{{$item->address}}</p>
                                        </div>
                                    </div>
                                    <div style="display:flex;align-items:center">
                                        <i class="ri-map-pin-time-line" style="font-size:40px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Satsang Day and Time</h6>
                                            <p class="content-p">{{$item->day}} | {{$item->time}}</p>
                                        </div>
                                    </div>
                                    <div style="display:flex;align-items:center">
                                        <i class="ri-phone-line" style="font-size:40px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Area Mukhi</h6>
                                            <p class="content-p">{{$item->area_mukhi_1_name}} : {{$item->area_mukhi_1_contact}},</p>
                                            @if ($item->area_mukhi_2_name != "")
                                            <p class="content-p">{{$item->area_mukhi_2_name}} : {{$item->area_mukhi_2_contact}}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div style="display:flex;align-items:center">
                                        <i class="ri-phone-line" style="font-size:40px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Contact Person</h6>
                                            <p class="content-p">{{$item->contact_person_1_name}} : {{$item->contact_person_1_contact}},</p>
                                            @if ($item->contact_person_2_name != "")
                                            <p class="content-p">{{$item->contact_person_2_name}} : {{$item->contact_person_2_contact}}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div style="display:flex;align-items:center">
                                        <i class="ri-artboard-2-line" style="font-size:40px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Sangat Type</h6>
                                            <p class="content-p">{{$item->type_of_satsang}}</p>
                                        </div>
                                    </div>
                                </table>
                                </tr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div> <!-- end row -->
        <div class="row">
            {{$alldata->links()}}
        </div>
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection

@section('scripts')

@endsection
