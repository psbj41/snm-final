@extends('backend.layouts.master')

@section('title')
Special Days Table
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
                    <h4 class="mb-sm-0">Special Day Notification & Files</h4>
                    <a class="btn btn-primary" href="{{route('upload.page')}}"
                        style="width:40%; margin-bottom: 10px">Back Page</a>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="butttonadd">
                            <a class="btn btn-primary" href="{{route('special.create')}}"
                                style="margin-bottom:10px; width:100%">Add New Special Day Notification & Files</a>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped mb-0">

                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Special Name</th>
                                        <td>ssn</td>
                                        <td>snp</td>
                                        <td>snm</td>
                                        <td>snss</td>
                                        <td>snsd</td>
                                        <td>snks</td>
                                        <th>Special PDF View</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($special as $item)
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{strToUpper($item->name)}}</td>
                                        <td>{{$item->ssn}}</td>
                                        <td>{{$item->snp}}</td>
                                        <td>{{$item->snm}}</td>
                                        <td>{{$item->snss}}</td>
                                        <td>{{$item->snsd}}</td>
                                        <td>{{$item->snks}}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary waves-effect waves-light" id="openmodal"
                                                data-bs-toggle="modal" data-video="{{$item->specialpdf}}" onclick="modalopen()"
                                                data-bs-target=".bs-example-modal-lg">{{strToUpper($item->name)}}</button>
                                        </td>
                                        <td id="tooltip-container0" class="d-flex">
                                            <a href="{{ route('special.edit',[$item->id]) }}" class="me-3 text-primary"
                                                data-bs-container="#tooltip-container0" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit"><i
                                                    class="mdi mdi-pencil font-size-18"></i></a>
                                            <form action="{{ route('special.destroy',[$item->id]) }}" method="POST">
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
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="closemodal()"></button>
            </div>
            <div class="modal-body text-center">
                <iframe style="width:95%; height:600px;" frameborder="0" id="fetchpdf"></iframe>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection

@section('scripts')
<script>
    function modalopen() {
       let url = document.querySelector('#openmodal').dataset.video; // Extract url from data-video attribute
       document.querySelector('#fetchpdf').src=url;
       // Remove iframe attributes when the modal has finished being hidden from the user
    }

    function closemodal(){
        let abc = document.querySelector('#fetchpdf');
        abc.removeAttr("src");
    }


</script>
@endsection
