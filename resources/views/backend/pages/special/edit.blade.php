@extends('backend.layouts.master')

@section('title')
Special Days Edit Page
@endsection

@section('css')
<link href="{{asset('backend/assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('backend/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
<link href="{{asset('backend/assets/libs/spectrum-colorpicker2/spectrum.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('backend/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
@endsection

@section('content')
<div class="page-content">
    <div class="container-fluid">

         <!-- start page title -->
         <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Special Day Notification & Files</h4>
                    <a class="btn btn-primary" href="{{route('special.index')}}" style="width:40%; margin-bottom: 10px">Back Page</a>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center m-2">Update Special Day Notification and File</h3>
                        <form action="{{ route('special.update',[$special->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Special Day Name</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text"
                                        id="example-text-input" name="name" value="{{$special->name}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Special Satsang Notification</label>
                                <div class="col-sm-9">
                                    <input type="checkbox" id="switch3" switch="bool" name="ssn" @if ($special->ssn == 'on') checked @endif />
                                    <label for="switch3" data-on-label="Yes" data-off-label="No"></label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Special Notification for Pracharak/Pracharika</label>
                                <div class="col-sm-9">
                                    <input type="checkbox" id="switch31" switch="bool" name="snp" @if ($special->snp == 'on') checked @endif />
                                    <label for="switch31" data-on-label="Yes" data-off-label="No"></label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Special Notification for Gyan Pracharak/Pracharika</label>
                                <div class="col-sm-9">
                                    <input type="checkbox" id="switch14" switch="bool" name="sngp" @if ($special->sngp == 'on') checked @endif />
                                    <label for="switch14" data-on-label="Yes" data-off-label="No"></label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Special Notification for Mukhi</label>
                                <div class="col-sm-9">
                                    <input type="checkbox" id="switch32" switch="bool" name="snm" @if ($special->snm == 'on') checked @endif />
                                    <label for="switch32" data-on-label="Yes" data-off-label="No"></label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Special Notification for Sector Sanyojak</label>
                                <div class="col-sm-9">
                                    <input type="checkbox" id="switch33" switch="bool" name="snss" @if ($special->snss == 'on') checked @endif />
                                    <label for="switch33" data-on-label="Yes" data-off-label="No"></label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Special Notification for Sewadal Sanchalak</label>
                                <div class="col-sm-9">
                                    <input type="checkbox" id="switch34" switch="bool" name="snsd" @if ($special->snsd == 'on') checked @endif />
                                    <label for="switch34" data-on-label="Yes" data-off-label="No"></label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Special Notification for Kshetriya Sanchalak</label>
                                <div class="col-sm-9">
                                    <input type="checkbox" id="switch35" switch="bool" name="snks" @if ($special->snks == 'on') checked @endif />
                                    <label for="switch35" data-on-label="Yes" data-off-label="No"></label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">PDF File</label>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-success" data-toggle="modal"
                                            data-target="#staticBackdrop" data-video="{{$special->specialpdf}}" download>View PDF</button>
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
<script src="{{asset('backend/assets/libs/select2/js/select2.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/spectrum-colorpicker2/spectrum.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>

<script src="{{asset('backend/assets/js/pages/form-advanced.init.js')}}"></script>
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
