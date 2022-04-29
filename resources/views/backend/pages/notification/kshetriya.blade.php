@extends('backend.layouts.master')

@section('title')
Special Notification for Kshetriya Sanchalak
@endsection

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

@endsection

@section('content')

<div class="page-content" id="dutylistscroll">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between" style="padding-bottom:5px;">
                    <h5 class="mb-sm-0">Special Notification for Kshetriya Sanchalak</h5>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div>
                <div class="col-lg-12">
                    <form action="" class="d-flex" style="margin-bottom: 5px">
                        <div style="width:100%; border:1px solid rgb(206, 206, 206); background-color:rgb(255, 255, 255);outline:none; padding:8px; border-radius:5px; display:flex">
                            <i class="ri-search-eye-line"></i>
                            <input type="search" value="{{$search}}"  placeholder="Search" name="search" style="border: none; outline:none; width:90%">
                        </div>
                        <div style="display: flex; justify-content:space-between; margin:0px 5px">
                            <button class="btn btn-success" type="submit">
                            <i class="ri-arrow-right-s-fill"></i>
                            </button>
                            <a href="{{route('duty.data.page2')}}" class="btn btn-danger">
                                <i class="ri-refresh-line"></i>
                            </a>
                        </div>
                    </form>

                </div>
                <div class="col-lg-12">
                    <form action="" class="d-flex">
                        <div style="width: 100%">
                                <input class="form-control" type="month" value="{{$month1}}" name="month"
                                    id="example-month-input">
                        </div>
                        <div style="display: flex; justify-content:space-between; margin:0px 5px">
                            <button class="btn btn-success" type="submit">
                            <i class="ri-arrow-right-s-fill"></i>
                            </button>
                            <a href="{{route('duty.data.page2')}}" class="btn btn-danger">
                                <i class="ri-refresh-line"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <span style="margin-bottom: 10px"></span>
             @foreach ($alldata as $item)
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body text-center">
                        <div>
                            <h5>{{$item->name}}</h5>
                            <button type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#staticBackdrop" data-video="{{$item->specialpdf}}" download>View PDF</button>
                            <a href="{{$item->specialpdf}}" download="{{$item->name}}">
                                <button class="btn btn-primary">Download</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div> <!-- end row -->
        <div class="row">
            {{-- {{$alldata->links()}} --}}
        </div>
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark border-dark">
                <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body p-0">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        // Set iframe attributes when the show instance method is called
        $("#staticBackdrop").on("show.bs.modal", function(event) {
            let button = $(event.relatedTarget); // Button that triggered the modal
            let url = button.data("video");      // Extract url from data-video attribute
            $(this).find("iframe").attr({
                src : url,
                allow : "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            });
        });

        // Remove iframe attributes when the modal has finished being hidden from the user
        $("#staticBackdrop").on("hidden.bs.modal", function() {
            $("#staticBackdrop iframe").removeAttr("src allow");
        });
    });
    </script>
@endsection
