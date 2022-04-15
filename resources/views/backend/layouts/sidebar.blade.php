<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            {{-- <div class="">
                <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-md rounded-circle">
            </div> --}}
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{Auth::user()->name}}</h4>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">SuperAdmin</li>
                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-admin-line"></i>
                        <span>Admin</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('user.index')}}">Users</a></li>
                        <li><a href="{{route('role.index')}}">Roles</a></li>
                        <li><a href="{{route('permission.index')}}">Permissions</a></li>
                    </ul>
                </li> --}}

                <li>
                    <a href="{{route('upload.page')}}" class="waves-effect">
                        <i class="ri-upload-cloud-line"></i>
                        <span>Upload Page</span>
                    </a>
                </li>

                <li class="menu-title">Admin</li>

                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="ri-home-4-fill"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('bhawan.data.today.page')}}" class="waves-effect">
                        <i class="ri-bubble-chart-line"></i>
                        <span>View Satsang</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('duty.data.page2')}}" class="waves-effect">
                        <i class="ri-file-list-3-line"></i>
                        <span>Pracharak Duty List</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('duty.data.page2')}}" class="waves-effect">
                        <i class="ri-file-list-3-line"></i>
                        <span>Sangat Duty List</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('administration.page')}}" class="waves-effect">
                        <i class="ri-shield-user-line"></i>
                        <span>Administration Contact</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('bhawan.data.page2')}}" class="waves-effect">
                        <i class="ri-layout-masonry-line"></i>
                        <span>Satsang Bhawan</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="ri-list-check-2"></i>
                        <span>Guidelines</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="ri-map-pin-time-line"></i>
                        <span>Latest Update</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="ri-share-line"></i>
                        <span>Share App</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('contact')}}" class="waves-effect">
                        <i class="ri-phone-line"></i>
                        <span>Contact Us</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('user.profile')}}" class="waves-effect">
                        <i class="ri-user-line"></i>
                        <span>Profile</span>
                    </a>
                </li>

                <li>
                    <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i
                            class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
