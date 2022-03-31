@extends('backend.layouts.master')

@section('title')
Users Table
@endsection

@section('css')
<!-- Plugins css -->
<link href="{{asset('backend/assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Sparkline Charts</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
                            <li class="breadcrumb-item active">Sparkline Charts</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <a class="btn btn-success" href="{{route('upload.page')}}" style="width:100%; margin-bottom:10px">Back Page</a>
                        <div class="text-center">
                            <h5>Administrator Contact Details</h5>
                            <h6> Excel File Upload </h6>
                            <p>Upload Excel File if you have latest info about "Administration Contact"</p>
                        </div>
                        <div>
                            <form action="{{route('admin.upload.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <input name="file" type="file">
                                </div>
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Upload File</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection

@section('scripts')
    <!-- Plugins js -->
    <script src="{{asset('backend/assets/libs/dropzone/min/dropzone.min.js')}}"></script>
@endsection
