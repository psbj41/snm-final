@extends('backend.layouts.master')

@section('title')
Pracharak Contact List
@endsection

@section('css')

@endsection

@section('content')

<div class="page-content" id="dutylistscroll">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between" style="padding-bottom:5px;">
                    <h5 class="mb-sm-0">Pracharak Contact List</h5>
                    {{-- <div class="text-center" style="display: flex; justify-content: center; align-items: center;margin-bottom: 10px" >
                        <form action="" >
                            <a href="{{route('duty.data.page2')}}" class="btn btn-success" style="font-size: 12px">
                                All Duty
                            </a>
                        </form>
                        <form action="">
                            <a href="{{route('duty.data.my.page')}}" class="btn btn-info" style="font-size: 12px">
                                My Duty
                            </a>
                        </form>
                    </div> --}}
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
                            <a href="{{route('all.duty')}}" class="btn btn-danger">
                                <i class="ri-refresh-line"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <span style="margin-bottom: 10px"></span>
            <style>
                p{
                    margin: 0px;
                    padding: 0px;
                }
                h6{
                    margin: 0px;
                    padding: 0px;
                }
            </style>
            @foreach ($alldata as $item)
            <div class="col-lg-4">
                <div class="card m-b-30">
                    <div class="card-body">

                        <div class="d-flex align-items-center">

                            <div class="flex-grow-1">
                                <table class="table">
                                    <div style="display:flex;align-items:center">
                                        <i class="ri-user-line" style="font-size:25px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Pracharak Name</h6>
                                            <p class="content-p">{{$item->name}}</p>
                                        </div>
                                    </div>
                                    <div style="display:flex;align-items:center">
                                        <i class="ri-phone-line" style="font-size:25px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Pracharak Contact</h6>
                                            <p class="content-p">{{$item->phone}}</p>
                                        </div>
                                    </div>
                                    <div style="display:flex;align-items:center">
                                        <i class="ri-map-pin-line" style="font-size:25px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Area</h6>
                                            <p class="content-p">{{$item->Area}}</p>
                                        </div>
                                    </div>
                                    <div style="display:flex;align-items:center">
                                        <i class="ri-mail-line" style="font-size:25px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Email ID</h6>
                                            <p class="content-p">{{$item->Email_ID}}</p>
                                        </div>
                                    </div>
                                    @if ($item->Gyan_Pracharak == "GP")
                                    <div style="display:flex;align-items:center">
                                        <i class="ri-user-line" style="font-size:25px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Gyan Pracharak</h6>
                                        </div>
                                    </div>
                                    @endif
                                    @if ($item->Area_Mukhi_Branch_Incharge == "Y")
                                    <div style="display:flex;align-items:center">
                                        <i class="ri-user-line" style="font-size:25px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Area Mukhi Branch Incharge</h6>
                                        </div>
                                    </div>
                                    @endif
                                    @if ($item->Sector_Sanyojak == "Y")
                                    <div style="display:flex;align-items:center">
                                        <i class="ri-user-line" style="font-size:25px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Sector Sanyojak</h6>
                                        </div>
                                    </div>
                                    @endif
                                    @if ($item->Sewadal_Sanchalak == "Y")
                                    <div style="display:flex;align-items:center">
                                        <i class="ri-user-line" style="font-size:25px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Sewadal Sanchalak</h6>
                                        </div>
                                    </div>
                                    @endif
                                    @if ($item->K_Sanchalak == "Y")
                                    <div style="display:flex;align-items:center">
                                        <i class="ri-user-line" style="font-size:25px; margin-right:10px"></i>
                                        <div>
                                            <h6 class="header-p" style="color:rgb(2, 2, 83);font-weight:700">Kshetriya Sanchalak</h6>
                                        </div>
                                    </div>
                                    @endif
                                </table>
                                </tr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div> <!-- end row -->
        <div class="row">
            {{$alldata->links()}}
        </div>
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection

@section('scripts')

@endsection
