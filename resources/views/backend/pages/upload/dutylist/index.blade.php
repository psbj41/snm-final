@extends('backend.layouts.master')

@section('title')
Duty List Table
@endsection

@section('css')
<!-- DataTables -->
<link href="{{asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend/assets/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link href="{{asset('backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Data Tables</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">Data Tables</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <a href="{{route('upload.page')}}" class="btn btn-primary" style="width:100%; margin-bottom: 10px">Back Page</a>
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Users Table</h4>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Action</th>
                                <th>Dutydate</th>
                                <th>satsangname</th>
                                <th>SatsangAddress</th>
                                <th>SatsangTime</th>
                                <th>PracharakName</th>
                                <th>PracharakContact</th>
                                <th>SectorID</th>
                                <th>BranchID</th>
                                <th>Day</th>
                                <th>Sangat_Day</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($alldata as $item)
                                <tr>
                                    {{-- <td id="tooltip-container0" class="d-flex">
                                        <a href="{{ route('user.edit',[$item->id]) }}" class="me-3 text-primary"
                                            data-bs-container="#tooltip-container0" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Edit"><i
                                                class="mdi mdi-pencil font-size-18"></i></a>
                                        <form action="{{ route('user.destroy',[$item->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button style="padding: 0; border:none; background:none; " type="submit"
                                                class="text-danger" data-bs-container="#tooltip-container0"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i
                                                    class="mdi mdi-trash-can font-size-18"></i></button>
                                        </form>
                                    </td> --}}
                                    <td>{{$item->Dutydate}}</td>
                                    <td>{{$item->satsangname}}</td>
                                    <td>{{$item->SatsangAddress}}</td>
                                    <td>{{$item->SatsangTime}}</td>
                                    <td>{{$item->satsangcontact}}</td>
                                    <td>{{$item->PracharakName}}</td>
                                    <td>{{$item->PracharakContact}}</td>
                                    <td>{{$item->SectorID}}</td>
                                    <td>{{$item->BranchID}}</td>
                                    <td>{{$item->Day}}</td>
                                    <td>{{$item->Sangat_Day}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection

@section('scripts')
<!-- Required datatable js -->
<script src="{{asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{asset('backend/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/jszip/jszip.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{asset('backend/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>

<script src="{{asset('backend/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>

<!-- Responsive examples -->
<script src="{{asset('backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

<!-- Datatable init js -->
<script src="{{asset('backend/assets/js/pages/datatables.init.js')}}"></script>
@endsection
