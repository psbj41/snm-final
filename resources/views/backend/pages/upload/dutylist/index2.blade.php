@extends('backend.layouts.master')

@section('title')
General Sangat Duty List
@endsection

@section('css')

@endsection

@section('content')

<div class="page-content" id="dutylistscroll">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between" style="padding-bottom:5px;">
                    <h5 class="mb-sm-0">General Sangat Duty List</h5>
                    {{-- <div class="text-center" style="display: flex; justify-content: center; align-items: center;margin-bottom: 10px" >
                        <form action="" >
                            <a href="{{route('duty.data.page2')}}" class="btn btn-success" style="font-size: 12px">
                                All Duty
                            </a>
                        </form>
                        <form action="">
                            <a href="{{route('duty.data.my.page')}}" class="btn btn-info" style="font-size: 12px">
                                My Duty
                            </a>
                        </form>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div>
                <div class="col-lg-12">
                    <form action="" class="d-flex" style="margin-bottom: 5px">
                        <div style="width:100%; border:1px solid rgb(206, 206, 206); background-color:rgb(255, 255, 255);outline:none; padding:8px; border-radius:5px; display:flex">
                            <i class="ri-search-eye-line"></i>
                            <input type="search" value="{{$search}}"  placeholder="Search" name="search" style="border: none; outline:none; width:90%">
                        </div>
                        <div style="display: flex; justify-content:space-between; margin:0px 5px">
                            <button class="btn btn-success" type="submit">
                            <i class="ri-arrow-right-s-fill"></i>
                            </button>
                            <a href="{{route('all.duty')}}" class="btn btn-danger">
                                <i class="ri-refresh-line"></i>
                            </a>
                        </div>
                    </form>

                </div>
                <div class="col-lg-12">
                    <form action="" class="d-flex">
                        <div style="width: 100%">
                                <input class="form-control" type="month" value="{{$month1}}" name="month"
                                    id="example-month-input">
                        </div>
                        <div style="display: flex; justify-content:space-between; margin:0px 5px">
                            <button class="btn btn-success" type="submit">
                            <i class="ri-arrow-right-s-fill"></i>
                            </button>
                            <a href="{{route('all.duty')}}" class="btn btn-danger">
                                <i class="ri-refresh-line"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <span style="margin-bottom: 10px"></span>
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
            @foreach ($alldata as $item)
            <div class="col-lg-4">
                <div class="card m-b-30">
                    <div class="card-body">

                        <div class="d-flex align-items-center">

                            <div class="flex-grow-1">
                                <table class="table">
                                    <div style="display:flex;align-items:center">
                                        <i class="ri-calendar-event-fill" style="font-size:25px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Duty Day and Date</h6>
                                            <p class="content-p">{{$item->Dutydatedata}}</p>
                                        </div>
                                    </div>
                                    <div style="display:flex;align-items:center">
                                        <i class="ri-layout-masonry-line" style="font-size:25px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Satsang Name</h6>
                                            <p class="content-p">{{$item->satsangname}}</p>
                                        </div>
                                    </div>
                                    <div style="display:flex;align-items:center">
                                        <i class="ri-map-pin-line" style="font-size:25px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Satsang Address</h6>
                                            <p class="content-p">{{$item->SatsangAddress}}</p>
                                        </div>
                                    </div>
                                    <div style="display:flex;align-items:center">
                                        <i class="ri-map-pin-time-line" style="font-size:25px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Satsang Time</h6>
                                            <p class="content-p">{{$item->SatsangTime}}</p>
                                        </div>
                                    </div>
                                    <div style="display:flex;align-items:center">
                                        <i class="ri-phone-line" style="font-size:25px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Satsang Contact</h6>
                                            <p class="content-p">{{$item->satsangcontact}}</p>
                                        </div>
                                    </div>
                                    <div style="display:flex;align-items:center">
                                        <i class="ri-user-3-line" style="font-size:25px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Pracharak Name</h6>
                                            <p class="content-p">{{$item->PracharakName}}</p>
                                        </div>
                                    </div>
                                    <div style="display:flex;align-items:center">
                                        <i class="ri-phone-line" style="font-size:25px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Pracharak Contact</h6>
                                            <p class="content-p">{{$item->PracharakContact}}</p>
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
