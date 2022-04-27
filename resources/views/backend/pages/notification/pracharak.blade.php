@extends('backend.layouts.master')

@section('title')
Special Notification for Pracharak/Pracharika
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
                    <h5 class="mb-sm-0">Special Notification for Pracharak/Pracharika</h5>
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
                            <a href="{{route('duty.data.page2')}}" class="btn btn-danger">
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
                            <a href="{{route('duty.data.page2')}}" class="btn btn-danger">
                                <i class="ri-refresh-line"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <span style="margin-bottom: 10px"></span>
             @foreach ($alldata as $item)
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body text-center">
                        <div>
                            <h5>{{$item->name}}</h5>
                            <button class="btn btn-success">View PDF</button>
                            <button class="btn btn-primary">Download</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div> <!-- end row -->
        <div class="row">
            {{-- {{$alldata->links()}} --}}
        </div>
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection

@section('scripts')

@endsection
