@extends('backend.layouts.master')

@section('title')
Users Edit Page
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
                    <h4 class="mb-sm-0">Forms Elements</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Forms Elements</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="butttonadd">
                            <a class="btn btn-primary" href="{{route('user.index')}}" style="margin-bottom:10px; width:100%">Back to User Index</a>
                        </div>

                        <h3 class="text-center m-2">Add New User Form</h3>
                        <form action="{{ route('user.update',[$user->id]) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Full Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"
                                        id="example-text-input" name="name" value="{{$user->name}}">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label id="example-text-input" class="col-sm-2 col-form-label">Contact Number (Username)</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"
                                        id="example-text-input" name="phone" value="{{$user->phone}}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-tel-input" class="col-sm-2 col-form-label">Alternate Number</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="tel"
                                        id="example-tel-input" name="alternate_phone" value="{{$user->alternate_phone}}">
                                </div>
                            </div>

                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-password-input"
                                    class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" id="example-password-input" name="password">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="roles">Select Role</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="role_id" id="roles">
                                        @foreach ($roles as $item)
                                        <option value="{{ $item->id }}" @if ($item->id === $user->role_id) selected @endif>{{ strtoupper($item->name) }}</option>
                                        @endforeach
                                    </select>
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
@endsection

@section('scripts')

@endsection
