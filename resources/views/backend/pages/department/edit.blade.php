@extends('backend.layouts.master')

@section('title')
Department Edit Page
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
                    <h4 class="mb-sm-0">Departmental Head & Co-ordinators Contact</h4>
                    <a class="btn btn-primary" href="{{route('department.index')}}" style="width:40%; margin-bottom: 10px">Back Page</a>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center m-2">Update Departmental Head & Co-ordinators Contact</h3>
                        <form action="{{ route('department.update',[$department->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"
                                        id="example-text-input" name="name" value="{{$department->name}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">PDF File</label>
                                <div class="col-sm-2">
                                    <a href="{{$department->departmentpdf}}" class="btn btn-link">View Old File</a>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="file"
                                        id="example-text-input" name="departmentpdf">
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
