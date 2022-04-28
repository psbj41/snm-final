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
        <style>
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
        </style>

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
                                            {{-- <button type="button" class="btn btn-primary waves-effect waves-light" value="{{$item->id}}"
                                                id="openmodal" data-video="{{$item->specialpdf}}"
                                                onclick="modalopen(this)">{{strToUpper($item->name)}}</button> --}}
                                                <a href="{{$item->specialpdf}}">Open PDF</a>
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
                                    <div class="mymodalcode" id="mmm_{{$item->id}}">
                                        <div class="box">
                                            <div class="d-flex" style="justify-content: space-between;border: 1px solid white; padding:5px">
                                                <div class="nam" style="font-size: 20px">Name</div>
                                                <button class="cross" id="crosbtn" style="font-size: 20px" value="{{$item->id}}" onclick="closemodal(this)">X</button>
                                            </div>
                                            <iframe style="width:95%; height:600px;" frameborder="0" id="fetchpdf"></iframe>
                                        </div>
                                    </div>
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

@endsection

@section('scripts')
{{-- <script>
    function modalopen(e) {
        let url = document.querySelector('#openmodal').dataset.video;
        let value = document.querySelector('#openmodal').value;
        document.querySelector('#fetchpdf').src = url;
        let modal = document.querySelector('#mmm_'+e.value);
        modal.style.display = "block";
        console.log("i am here");
        console.log(modal);
    }

    function closemodal(e) {
        // let abc = document.querySelector('#fetchpdf');
        // abc.removeAttr("src");
        let value = document.querySelector('#crosbtn').value;
        let modal = document.querySelector('#mmm_'+e.value);
        modal.style.display = "none";
    }

</script> --}}
@endsection
