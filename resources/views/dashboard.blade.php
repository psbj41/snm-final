@extends('backend.layouts.master')


@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Home</h4>

                    {{-- <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Home</li>
                        </ol>
                    </div> --}}

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-xl-12">
                            <div class="text-center">
                                <img class="rounded-circle avatar-xl" alt=""
                                    src="{{asset('backend/assets/images/logo.jpg')}}" data-holder-rendered="true">
                            </div>
                            <style>
                                .thought-box{
                                    margin: 20px 0px;
                                    box-shadow: 0px 5px 17px -7px rgb(0 0 0 / 75%);
                                    padding: 15px;
                                    border-radius: 5px;
                                    text-align: justify;
                                }
                                @media only screen and (min-width: 900px) {
                                .thought-box p{
                                    text-align: center;
                                }
                                }
                            </style>
                            <div class="text-center" style="margin-top:10px">
                                <h5 style="font-weight: 600; color:rgb(1, 1, 119)">Sant Nirankari Mission - Mumbai (India)</h5>
                            </div>
                            {{-- <div class="thought-box">
                                <div id="carouselExampleCaption" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img src="{{asset('backend/assets/images/small/img-7.jpg')}}" alt="..." class="d-block img-fluid">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{asset('backend/assets/images/small/img-5.jpg')}}" alt="..." class="d-block img-fluid">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{asset('backend/assets/images/small/img-4.jpg')}}" alt="..." class="d-block img-fluid">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleCaption" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleCaption" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div> --}}
                            <div class="thought-box">
                                <h5 class="text-center">Thought of the day</h5>
                                <p>{{$thought}}</p>
                            </div>
                            <div class="thought-box text-center">
                                <h5>Quick Link</h5>
                                <p>Today is Monday<br>Click here for Sangat Details</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection
