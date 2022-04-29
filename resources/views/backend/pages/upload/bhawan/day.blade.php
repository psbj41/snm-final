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
                    <h3>Today is {{$current_day_name}}</h3>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <form action="" class="d-flex" style="margin-bottom: 5px">
                    <div style="width:100%; border:1px solid rgb(206, 206, 206); background-color:rgb(255, 255, 255);outline:none; padding:8px; border-radius:5px; display:flex">
                        <i class="ri-search-eye-line"></i>
                        <input type="search" value="{{$search}}"  placeholder="Search" name="search" style="border: none; outline:none;">
                    </div>
                    <div style="display: flex; justify-content:space-between; margin:0px 5px">
                        <button class="btn btn-success" type="submit">
                        <i class="ri-arrow-right-s-fill"></i>
                        </button>
                        <a href="{{route('duty.data.page2')}}" class="btn btn-danger">
                            <i class="ri-refresh-line"></i>
                        </a>
                    </div>
                </form>
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
                                        <i class="ri-layout-masonry-line" style="font-size:25px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Satsang Name</h6>
                                            <p class="content-p">{{$item->SatsangName}}</p>
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
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Satsang Day</h6>
                                            @if ($item->Day == 2)
                                            <p class="content-p">Monday</p>
                                            @endif
                                            @if ($item->Day == 3)
                                            <p class="content-p">Tuesday</p>
                                            @endif
                                            @if ($item->Day == 4)
                                            <p class="content-p">Wedensday</p>
                                            @endif
                                            @if ($item->Day == 5)
                                            <p class="content-p">Thursday</p>
                                            @endif
                                            @if ($item->Day == 6)
                                            <p class="content-p">Friday</p>
                                            @endif
                                            @if ($item->Day == 7)
                                            <p class="content-p">Saturday</p>
                                            @endif
                                            @if ($item->Day == 1)
                                            <p class="content-p">Sunday</p>
                                            @endif
                                            @if ($item->Day !=1 && $item->Day != 2 && $item->Day != 3 && $item->Day != 4 && $item->Day != 5 && $item->Day != 6 && $item->Day != 7 )
                                            <p class="content-p">{{$item->Day}}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div style="display:flex;align-items:center">
                                        <i class="ri-map-pin-time-line" style="font-size:25px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Satsang Time</h6>
                                            <p class="content-p">{{$item->Time}}</p>
                                        </div>
                                    </div>
                                    <div style="display:flex;align-items:center">
                                        <i class="ri-phone-line" style="font-size:25px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Satsang Contact</h6>
                                            <p class="content-p">{{$item->SatsangContact}}</p>
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
