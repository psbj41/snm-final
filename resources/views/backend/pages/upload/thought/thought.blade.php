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
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Thought of the Day</h4>
                    <a class="btn btn-primary" href="{{route('upload.page')}}" style="width:40%; margin-bottom: 10px">Back Page</a>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h6 style="color: rgb(4, 4, 109);font-weight:900">Thought of the Day</h6>
                            <p style="border: 1px dashed black; padding:5px">
                                <i class="ri-file-excel-2-line"></i>
                                Excel File Upload
                            </p>
                            <p style="font-size: 12px">Add "Thought of the Day" that will be displayed on the Website and Android app</p>
                        </div>
                        <div>
                            <form action="{{route('thought.upload.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="text-center">
                                    <input name="file" type="file">
                                </div>
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-success waves-effect waves-light">Upload File</button>
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
