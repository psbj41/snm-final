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
            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Administrator Contact Details</h5>
                        <h6> Excel File Upload </h6>
                        <p>Upload Excel File if you have latest info about "Administration Contact"</p>
                        <a class="btn btn-success" href="{{route('admin.upload.page')}}" style="width:100%">Go Upload Page</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Satsang Bhawan Details</h5>
                        <h6> Excel File Upload </h6>
                        <p>Upload Excel File if you have latest info about "Administration Contact"</p>
                        <a class="btn btn-success" href="{{route('bhawan.upload.page')}}" style="width:100%">Go Upload Page</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Duty List</h5>
                        <h6> Excel File Upload </h6>
                        <p>Upload Excel File if you have latest info about "Administration Contact"</p>
                        <a class="btn btn-success" href="" style="width:100%">Go Upload Page</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Thought of the Day</h5>
                        <h6> Excel File Upload </h6>
                        <p>Upload Excel File if you have latest info about "Administration Contact"</p>
                        <a class="btn btn-success" href="{{route('thought.upload.page')}}" style="width:100%">Go Upload Page</a>
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
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Departmental Head and Co-ordinators Contact</h5>
                        <h6> Excel File Upload </h6>
                        <p>Upload Excel File if you have latest info about "Administration Contact"</p>
                        <a class="btn btn-success" href="" style="width:100%">Go Upload Page</a>
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
