@extends('backend.layouts.master')

@section('title')
Special Days Table
@endsection

@section('css')
<link href="{{asset('backend/assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('backend/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
<link href="{{asset('backend/assets/libs/spectrum-colorpicker2/spectrum.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('backend/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="page-content">
    <div class="container-fluid">

         <!-- start page title -->
         <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Notifications</h4>
                    <a class="btn btn-primary" href="{{route('upload.page')}}" style="width:40%; margin-bottom: 10px">Back Page</a>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center m-2">Add New Special Day Notification and File</h3>
                        <form action="{{ route('special.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Special Day Name</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text"
                                        id="example-text-input" name="name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Special Satsang Notification</label>
                                <div class="col-sm-9">
                                    <input type="checkbox" id="switch3" switch="bool" name="ssn" checked />
                                    <label for="switch3" data-on-label="Yes" data-off-label="No"></label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Special Notification for Pracharak/Pracharika</label>
                                <div class="col-sm-9">
                                    <input type="checkbox" id="switch31" switch="bool" name="snp" checked />
                                    <label for="switch31" data-on-label="Yes" data-off-label="No"></label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Special Notification for Mukhi</label>
                                <div class="col-sm-9">
                                    <input type="checkbox" id="switch32" switch="bool" name="snm" checked />
                                    <label for="switch32" data-on-label="Yes" data-off-label="No"></label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Special Notification for Sector Sanyojak</label>
                                <div class="col-sm-9">
                                    <input type="checkbox" id="switch33" switch="bool" name="snss" checked />
                                    <label for="switch33" data-on-label="Yes" data-off-label="No"></label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Special Notification for Sewadal Sanchalak</label>
                                <div class="col-sm-9">
                                    <input type="checkbox" id="switch34" switch="bool" name="snsd" checked />
                                    <label for="switch34" data-on-label="Yes" data-off-label="No"></label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Special Notification for Kshetriya Sanchalak</label>
                                <div class="col-sm-9">
                                    <input type="checkbox" id="switch35" switch="bool" name="snks" checked />
                                    <label for="switch35" data-on-label="Yes" data-off-label="No"></label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-3 col-form-label">PDF File</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="file"
                                        id="example-text-input" name="specialpdf">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <button class="form-control btn btn-success" type="submit">Submit Form</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection

@section('scripts')
<script src="{{asset('backend/assets/libs/select2/js/select2.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/spectrum-colorpicker2/spectrum.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>

<script src="{{asset('backend/assets/js/pages/form-advanced.init.js')}}"></script>
@endsection
