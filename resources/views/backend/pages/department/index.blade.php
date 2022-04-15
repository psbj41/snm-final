@extends('backend.layouts.master')

@section('title')
Department Table
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
                    <h4 class="mb-sm-0">Departmental Head & Co-ordinators Contact</h4>
                    <a class="btn btn-primary" href="{{route('upload.page')}}" style="width:40%; margin-bottom: 10px">Back Page</a>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="butttonadd">
                            <a class="btn btn-primary" href="{{route('department.create')}}"
                                style="margin-bottom:10px; width:100%">Add New Departmental Head & Co-ordinators Contact</a>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped mb-0">

                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Department Name</th>
                                        <th>Department PDF View</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($department as $item)
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{strToUpper($item->name)}}</td>
                                        <td>
                                            <a href="{{$item->departmentpdf}}" class="btn btn-link">View Pdf</a>
                                        </td>
                                        <td id="tooltip-container0" class="d-flex">
                                            <a href="{{ route('department.edit',[$item->id]) }}" class="me-3 text-primary"
                                                data-bs-container="#tooltip-container0" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit"><i
                                                    class="mdi mdi-pencil font-size-18"></i></a>
                                            <form action="{{ route('department.destroy',[$item->id]) }}" method="POST">
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
@endsection

@section('scripts')

@endsection
