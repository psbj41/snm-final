@extends('backend.layouts.master')

@section('title')
Administration Table
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
                    <h4 class="mb-sm-0">Administrator Contact</h4>
                    <a href="{{route('dashboard')}}" class="btn btn-primary" style="width:40%; margin-bottom: 10px">Home Page</a>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Pracharak Contact</h5>
                        <a class="btn btn-success" href="{{route('administration.pracharak.page')}}" style="width:100%">Go Upload Page</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Pracharika Contact</h5>
                        <a class="btn btn-success" href="{{route('administration.pracharika.page')}}" style="width:100%">Go Upload Page</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Sanyojak Mukhi and Sanchalak Contact</h5>
                        <a class="btn btn-success" href="{{route('administration.sanyojak.page')}}" style="width:100%">Go Upload Page</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Gyan Pracharak Address Contact</h5>
                        <a class="btn btn-success" href="{{route('administration.gyan.page')}}" style="width:100%">Go Upload Page</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Departmental Head & Coordinator Contact</h5>
                        <a class="btn btn-success" href="{{route('administration.department.page')}}" style="width:100%">Go Upload Page</a>
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
