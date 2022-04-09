@extends('backend.layouts.master')

@section('title')
Duty List Table
@endsection

@section('css')

@endsection

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Duty List</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div>
                <a href="{{route('dashboard')}}" class="btn btn-primary" style="width:100%; margin-bottom: 10px">Home Page</a>
            </div>
            <div>
                <form action="">
                    <input type="search" value="{{$search}}" style="width:100%; border:1px solid rgb(206, 206, 206); outline:none; padding:8px; border-radius:5px; margin-bottom:10px" placeholder="Search" name="search">
                    <div style="display: flex; justify-content:space-between; margin-bottom:10px">
                        <button style="width:49%;" class="btn btn-success">Search</button>
                        <a href="{{route('duty.data.page2')}}" style="width:49%;" class="btn btn-danger">Reset</a>
                    </div>
                </form>
                <div class="row">
                    <div class="col-sm-12">
                        <input class="form-control" type="month" value="2022-04"
                            id="example-month-input">
                    </div>
                </div>
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
                                    <tbody>
                                      <tr>
                                        <td style="border-bottom-width: 0px;">Date and Time:</td>
                                        <td colspan="2" style="border-bottom-width: 0px;">{{$item->dutydate}}</td>
                                      </tr>
                                      <tr>
                                        <td style="border-bottom-width: 0px;">Satsang Name:</td>
                                        <td colspan="2" style="border-bottom-width: 0px;">{{$item->name}}</td>
                                      </tr>
                                      <tr>
                                        <td style="border-bottom-width: 0px;">Address:</td>
                                        <td colspan="2" style="border-bottom-width: 0px;">{{$item->address}}</td>
                                      </tr>
                                      <tr>
                                        <td style="border-bottom-width: 0px;">Timing:</td>
                                        <td colspan="2" style="border-bottom-width: 0px;">{{$item->time}}</td>
                                      </tr>
                                      <tr>
                                        <td style="border-bottom-width: 0px;">Satsang Contact Number:</td>
                                        <td colspan="2" style="border-bottom-width: 0px;">{{$item->alternate_phone}}</td>
                                      </tr>
                                    </tbody>
                                </table>
                                </tr>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div> <!-- end row -->
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection

@section('scripts')

@endsection
