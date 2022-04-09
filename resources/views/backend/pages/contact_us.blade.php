@extends('backend.layouts.master')


@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Contact Us</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title text-center">Address</h4>
                        <p class="text-center">Sant Nirankari Mission, Mumbai <br> Sant Nirankari Satsang Bhawan, Mahul Road, Chembur. <br>Mumbai - 400 074</p>

                        <div id="gmaps-markers" class="gmaps"></div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div style="display: flex; justify-content:center; align-items:center">
                            <i class="ri-phone-line" style="font-size: 30px; align-item:center; padding:0px 10px"></i>
                            <h5>Phone</h5>
                        </div>
                        <p class="text-center">(022) 25531468 / 25535215</p>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body text-center">
                            <div style="display: flex; justify-content:center; align-items:center">
                                <i class="ri-mail-send-line" style="font-size: 30px; align-item:center; padding:0px 10px"></i>
                                <h5>Email-ID</h5>
                            </div>
                        <p class="text-center">mumbai@nirankari.org</p>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->


    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection

@section('scripts')
<!-- google maps api -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>

<!-- Gmaps file -->
<script src="{{asset('backend/assets/libs/gmaps/gmaps.min.js')}}"></script>

<!-- demo codes -->
<script src="{{asset('backend/assets/js/pages/gmaps.init.js')}}"></script>
@endsection
