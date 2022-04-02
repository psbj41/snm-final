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
                        <h5>Deapartmental Head and Coordinator Contact</h5>
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
