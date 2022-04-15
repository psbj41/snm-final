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
                <form action="" class="d-flex">
                    <div style="width:70%; border:1px solid rgb(206, 206, 206); background-color:white;outline:none; padding:8px; border-radius:5px; margin-bottom:10px; display:flex">
                        <i class="ri-search-eye-line"></i>
                        <input type="search" value="{{$search}}"  placeholder="Search" name="search" style="border: none; outline:none">
                    </div>
                    <div style="display: flex; justify-content:space-between; margin-bottom:10px">
                        <button style="width:15%;" class="btn btn-success">
                        <i class="ri-arrow-right-s-fill"></i>
                        </button>
                        <a href="{{route('duty.data.page2')}}" style="width:49%;" class="btn btn-danger">
                            <i class="ri-refresh-line"></i>
                        </a>
                    </div>
                </form>
                <form action="">
                    <div class="row">
                        <div class="col-sm-12">
                            <input class="form-control" type="month" value="{{$month1}}" name="month"
                                id="example-month-input">
                        </div>
                    </div>
                    <div style="display: flex; justify-content:space-between; margin:10px 0px">
                        <button style="width:49%;" class="btn btn-success">click</button>
                    </div>
                </form>
                <div class="text-center" style="display: flex; justify-content: center; align-items: center;">
                        <form action="" style="padding: 10px;">
                            <a href="{{route('duty.data.page2')}}" class="btn btn-success">
                                All Duty
                            </a>
                        </form>
                        <form action="">
                            <a href="{{route('duty.data.my.page')}}" class="btn btn-info">
                                My Duty
                            </a>
                        </form>
                </div>
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
                                        <i class="ri-calendar-event-fill" style="font-size:40px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Duty Day and Date</h6>
                                            <p class="content-p">{{$item->dutydate}}</p>
                                        </div>
                                    </div>
                                    <div style="display:flex;align-items:center">
                                        <i class="ri-layout-masonry-line" style="font-size:40px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Satsang Name</h6>
                                            <p class="content-p">{{$item->name}}</p>
                                        </div>
                                    </div>
                                    <div style="display:flex;align-items:center">
                                        <i class="ri-map-pin-line" style="font-size:40px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Satsang Address</h6>
                                            <p class="content-p">{{$item->address}}</p>
                                        </div>
                                    </div>
                                    <div style="display:flex;align-items:center">
                                        <i class="ri-map-pin-time-line" style="font-size:40px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Satsang Time</h6>
                                            <p class="content-p">{{$item->time}}</p>
                                        </div>
                                    </div>
                                    <div style="display:flex;align-items:center">
                                        <i class="ri-phone-line" style="font-size:40px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Satsang Contact</h6>
                                            <p class="content-p">{{$item->contact}}</p>
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
