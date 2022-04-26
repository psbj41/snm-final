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
                <div class="page-title-box d-flex align-items-center justify-content-between" style="padding-bottom:5px;">
                    <h5 class="mb-sm-0">{{Auth::user()->name}} Duty List</h5>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
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
