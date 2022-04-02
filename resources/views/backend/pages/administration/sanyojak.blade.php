@extends('backend.layouts.master')

@section('title')
Users Table
@endsection

@section('css')

@endsection

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Directory</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Utility</a></li>
                            <li class="breadcrumb-item active">Directory</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="butttonadd">
                <a class="btn btn-primary" href="{{route('user.create')}}" style="margin-bottom:10px; width:100%">Add New User</a>
            </div>
            <form>
                <div>
                    <input type="text" class="form-control" placeholder="Search...">
                    {{-- <span class="ri-search-line"></span> --}}
                </div>
            </form>
            <span style="margin-bottom: 10px"></span>
            @foreach ($allData as $item)
            <div class="col-lg-4">
                <div class="card m-b-30">
                    <div class="card-body">

                        <div class="d-flex align-items-center">
                            {{-- <img class="d-flex me-3 rounded-circle img-thumbnail avatar-lg"
                                src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image"> --}}
                            <div class="flex-grow-1">
                                <table class="table">
                                    <tbody>
                                      <tr>
                                        <td style="border-bottom-width: 0px;">Name:</td>
                                        <td colspan="2" style="border-bottom-width: 0px;">{{$item->name}}</td>
                                      </tr>
                                      <tr>
                                        <td style="border-bottom-width: 0px;">Username:</td>
                                        <td colspan="2" style="border-bottom-width: 0px;">{{$item->phone}}</td>
                                      </tr>
                                      <tr>
                                        <td style="border-bottom-width: 0px;">Alternate Phone No:</td>
                                        <td colspan="2" style="border-bottom-width: 0px;">{{$item->alternate_phone}}</td>
                                      </tr>
                                      <tr>
                                        <td style="border-bottom-width: 0px;">Role:</td>
                                        <td colspan="2" style="border-bottom-width: 0px;">{{strToUpper($item->roles[0]->name)}}</td>
                                      </tr>
                                    </tbody>
                                </table>
                                      <div class="d-flex" style="justify-content: space-evenly">
                                        <a href="{{ route('user.edit',[$item->id]) }}" class="btn btn-primary">Edit User</a>
                                        <a href="" class="btn btn-success">View</a>
                                        <form action="{{ route('user.destroy',[$item->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                      </div>
                                </tr>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
            @endforeach
        </div> <!-- end row -->
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection

@section('scripts')

@endsection
