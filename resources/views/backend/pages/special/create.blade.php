@extends('backend.layouts.master')

@section('title')
Special Days Table
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
                    <h4 class="mb-sm-0">Special Day Notification & Files</h4>
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
                                <label for="example-text-input" class="col-sm-2 col-form-label">Special Day Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"
                                        id="example-text-input" name="name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">PDF File</label>
                                <div class="col-sm-10">
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

@endsection
