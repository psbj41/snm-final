<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            {{-- <div class="">
                <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-md rounded-circle">
            </div> --}}
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{Auth::user()->name}}</h4>
                <span class="text-muted"><i
                        class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">SuperAdmin</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-admin-line"></i>
                        <span>Admin</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('user.index')}}">Users</a></li>
                        <li><a href="{{route('role.index')}}">Roles</a></li>
                        <li><a href="{{route('permission.index')}}">Permissions</a></li>
                    </ul>
                </li>

                <li class="menu-title">Admin</li>

                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="ri-home-4-fill"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="ri-layout-6-fill"></i>
                        <span>View Satsang</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="ri-layout-6-fill"></i>
                        <span>Duty List</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="ri-layout-6-fill"></i>
                        <span>Administration Contact</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="ri-layout-6-fill"></i>
                        <span>Satsang Bhawan</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="ri-layout-6-fill"></i>
                        <span>Guidelines</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Latest Update</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Share App</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Contact Us</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('upload.page')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Upload Page</span>
                    </a>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
