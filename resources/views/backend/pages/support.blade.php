@extends('backend.layouts.master')


@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Support Team</h4>
                    <a href="{{route('dashboard')}}" class="btn btn-primary" style="width:40%; margin-bottom: 10px">Home Page</a>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-center">Milind Karande</h5>
                        <div style="display: flex; justify-content:center; align-items:center">
                            <i class="ri-phone-line" style="font-size: 20px; align-item:center; justify-content:center; margin:0px 5px"></i>
                            <p class="text-center" style="padding: 15px 0px 0px 0px">9920636908</p>
                        </div>

                    </div>
                    <div class="card-body">
                        <h5 class="text-center">Aarti Karande</h5>
                        <div style="display: flex; justify-content:center; align-items:center">
                            <i class="ri-phone-line" style="font-size: 20px; align-item:center; justify-content:center; margin:0px 5px"></i>
                            <p class="text-center" style="padding: 15px 0px 0px 0px">9920625758</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="text-center">Pratik Jadhav</h5>
                        <div style="display: flex; justify-content:center; align-items:center">
                            <i class="ri-phone-line" style="font-size: 20px; align-item:center; justify-content:center; margin:0px 5px"></i>
                            <p class="text-center" style="padding: 15px 0px 0px 0px">7218358829</p>
                        </div>
                        <div style="display: flex; justify-content:center; align-items:center">
                            <i class="ri-mail-line" style="font-size: 20px; align-item:center; justify-content:center; margin:0px 5px"></i>
                            <p class="text-center" style="padding: 15px 0px 0px 0px">psj334061236@gmail.com</p>
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

@endsection
