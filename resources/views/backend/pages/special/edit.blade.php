@extends('backend.layouts.master')

@section('title')
Special Days Edit Page
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
                    <h4 class="mb-sm-0">Forms Elements</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Forms Elements</li>
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

                        <div class="butttonadd">
                            <a class="btn btn-primary" href="{{route('special.index')}}" style="margin-bottom:10px; width:100%">Back to User Index</a>
                        </div>

                        <h3 class="text-center m-2">Add New User Form</h3>
                        <form action="{{ route('special.update',[$special->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Role Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"
                                        id="example-text-input" name="name" value="{{$special->name}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">PDF File</label>
                                <div class="col-sm-2">
                                    <a href="{{$special->specialpdf}}" class="btn btn-primary">View Old File</a>
                                </div>
                                <div class="col-sm-8">
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
