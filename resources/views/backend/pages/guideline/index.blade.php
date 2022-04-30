@extends('backend.layouts.master')

@section('title')
Guideline Table
@endsection

@section('css')
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
                    <a class="btn btn-primary" href="{{route('upload.page')}}"
                        style="width:40%; margin-bottom: 10px">Back Page</a>
                </div>
            </div>
        </div>
        <!-- end page title -->
        {{-- <style>
            .mymodalcode{
                background-color: rgb(0, 119, 255);
                position: absolute;
                width: 90%;
                height: 80%;
                float: left;
                left: 50%;
                top: 50%;
                border-radius: 5px;
                padding: 5px;
                transform: translate(-50%, -50%);
                z-index: 5;
                margin-top: 20px;
                color: rgba(255, 255, 255, 0.952);
                display: none;
            }
        </style> --}}

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="butttonadd">
                            <a class="btn btn-primary" href="{{route('guideline.create')}}"
                                style="margin-bottom:10px; width:100%">Add New Guideline Files</a>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped mb-0">

                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Guideline Name</th>
                                        <th>Guideline PDF View</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($guideline as $item)
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{strToUpper($item->name)}}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#staticBackdrop" data-video="{{$item->guidelinepdf}}" download>Click here</button>
                                        </td>
                                        <td id="tooltip-container0" class="d-flex">
                                            <a href="{{ route('guideline.edit',[$item->id]) }}" class="me-3 text-primary"
                                                data-bs-container="#tooltip-container0" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit"><i
                                                    class="mdi mdi-pencil font-size-18"></i></a>
                                            <form action="{{ route('guideline.destroy',[$item->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button style="padding: 0; border:none; background:none; " type="submit"
                                                    class="text-danger" data-bs-container="#tooltip-container0"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i
                                                        class="mdi mdi-trash-can font-size-18"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end row -->
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
