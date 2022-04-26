@extends('backend.layouts.master')

@section('title')
Users Table
@endsection

@section('css')

@endsection

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Data Upload</h4>
                    <a href="{{route('dashboard')}}" class="btn btn-primary" style="width:40%; margin-bottom: 10px">Home Page</a>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h6 style="color: rgb(4, 4, 109);font-weight:900">Administrator Contact Details</h6>
                        <p style="border: 1px dashed black; padding:5px">
                        <i class="ri-file-excel-2-line"></i>
                        Excel File Upload
                        </p>
                        <p style="font-size: 12px">Upload Excel File if you have latest info about "Administration Contact"</p>
                        <div class="d-flex justify-around">
                            <a class="btn btn-success m-1" href="{{route('admin.upload.page')}}" style="width:48%">
                                <i class="ri-upload-2-line"></i> Upload
                            </a>
                            <a class="btn btn-info m-1" href="{{route('admin.data.page')}}" style="width:48%;">
                                <i class="ri-table-2"></i>Table</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h6 style="color: rgb(4, 4, 109);font-weight:900">Satsang Bhawan Details</h6>
                        <p style="border: 1px dashed black; padding:5px">
                            <i class="ri-file-excel-2-line"></i>
                            Excel File Upload
                        </p>
                        <p style="font-size: 12px">Upload Excel File if you have latest info about "Satsang Bhawan Details"</p>
                        <div class="d-flex justify-around">
                            <a class="btn btn-success m-1" href="{{route('bhawan.upload.page')}}" style="width:48%">
                                <i class="ri-upload-2-line"></i> Upload
                            </a>
                            <a class="btn btn-info m-1" href="{{route('bhawan.data.page')}}" style="width:48%;">
                                <i class="ri-table-2"></i>Table</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h6 style="color: rgb(4, 4, 109);font-weight:900">Thought of the Day</h6>
                        <p style="border: 1px dashed black; padding:5px">
                            <i class="ri-file-excel-2-line"></i>
                            Excel File Upload
                        </p>
                        <p style="font-size: 12px">Add "Thought of the Day" that will be displayed on the Website and Android app</p>
                        <div class="d-flex justify-around">
                            <a class="btn btn-success m-1" href="{{route('thought.upload.page')}}" style="width:48%">
                                <i class="ri-upload-2-line"></i> Upload
                            </a>
                            <a class="btn btn-info m-1" href="{{route('thought.data.page')}}" style="width:48%;">
                                <i class="ri-table-2"></i>Table</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h6 style="color: rgb(4, 4, 109);font-weight:900">Special Day Notification & Files</h6>
                        <p style="border: 1px dashed black; padding:5px">
                            <i class="ri-file-paper-2-line"></i>
                            PDF File Upload
                        </p>
                        <p style="font-size: 12px">Upload PDF File if you have latest info about "Special Day Notification & Files"</p>
                        <div class="d-flex justify-around">
                            <a class="btn btn-success m-1" href="{{route('special.create')}}" style="width:48%">
                                <i class="ri-upload-2-line"></i> Upload
                            </a>
                            <a class="btn btn-info m-1" href="{{route('special.index')}}" style="width:48%;">
                                <i class="ri-table-2"></i>Table</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h6 style="color: rgb(4, 4, 109);font-weight:900">Departmental Head & Co-ordinators Contact</h6>
                        <p style="border: 1px dashed black; padding:5px">
                            <i class="ri-file-paper-2-line"></i>
                            PDF File Upload
                        </p>
                        <p style="font-size: 12px">Upload PDF File if you have latest info about "Departmental Head and Co-ordinators Contact"</p>
                        <div class="d-flex justify-around">
                            <a class="btn btn-success m-1" href="{{route('department.create')}}" style="width:48%">
                                <i class="ri-upload-2-line"></i> Upload
                            </a>
                            <a class="btn btn-info m-1" href="{{route('department.index')}}" style="width:48%;">
                                <i class="ri-table-2"></i>Table</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h6 style="color: rgb(4, 4, 109);font-weight:900">Duty List</h6>
                        <p style="border: 1px dashed black; padding:5px">
                            <i class="ri-file-excel-2-line"></i>
                            Excel File Upload
                        </p>
                        <p style="font-size: 12px">Upload Excel File if you have latest info about "Duty List"</p>
                        <div class="d-flex justify-between">
                            <a class="btn btn-success m-1" href="{{route('duty.upload.page')}}" style="width:48%">
                                <i class="ri-upload-2-line"></i> Upload
                            </a>
                            <a class="btn btn-info m-1" href="{{route('duty.data.page')}}" style="width:48%;">
                                <i class="ri-table-2"></i>Table</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Sanyojak Mukhi & Sanyojak Contact</h5>
                        <h6> Excel File Upload </h6>
                        <p>Upload Excel File if you have latest info about "Administration Contact"</p>
                        <a class="btn btn-success" href="" style="width:100%">Go Upload Page</a>
                        <a class="btn btn-info" href="{{route('admin.upload.page')}}" style="width:100%; margin-top:10px">View Data Page</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection

@section('scripts')

@endsection
