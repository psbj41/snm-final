@extends('backend.layouts.master')

@section('title')
Users Profile Page
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
                    <h4 class="mb-sm-0">Profile Update</h4>
                    <a href="{{route('dashboard')}}" class="btn btn-primary" style="width:40%; margin-bottom: 10px">Home Page</a>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center m-3">{{Auth::user()->name}}</h4>
                        <form action="{{ route('user.update',[Auth::user()->id]) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Full Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"
                                        id="example-text-input" name="name" value="{{Auth::user()->name}}">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label id="example-text-input" class="col-sm-2 col-form-label">Contact Number (Username)</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"
                                        id="example-text-input" name="phone" value="{{Auth::user()->phone}}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Email Address</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"
                                        id="example-text-input" name="email_address" value="{{Auth::user()->email_address}}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Gender</label>
                                <div class="col-sm-10">
                                    <select class="form-control" type="text"
                                        id="example-text-input" name="gender" >
                                        <option value="M" @if(Auth::user()->gender == 'M') selected @endif>Male</option>
                                        <option value="F" @if(Auth::user()->gender == 'F') selected @endif>Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" type="text"
                                        id="example-text-input" name="address" >
                                        {{Auth::user()->address}}
                                    </textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Area</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"
                                        id="example-text-input" name="area" value="{{Auth::user()->area}}">
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
                                <div class="col-sm-12">
                                    <button class="form-control btn btn-success" type="submit">Update Profile</button>
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
