<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{Auth::user()->name}}</h4>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="ri-home-4-fill"></i>
                        <span>Home</span>
                    </a>
                </li>

                @if (Auth::user()->role == 'superadmin')
                <li class="menu-title">SuperAdmin</li>
                <li>
                    <a href="{{route('upload.page')}}" class="waves-effect">
                        <i class="ri-upload-cloud-line"></i>
                        <span>Admin Upload</span>
                    </a>
                </li>
                @endif
                @if (Auth::user()->role != 'normal')
                <li>
                    <a href="{{route('pracharakDetails')}}" class="waves-effect">
                        <i class="ri-file-list-3-line"></i>
                        <span>Pracharak Contact List</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('administrationDetails')}}" class="waves-effect">
                        <i class="ri-shield-user-line"></i>
                        <span>Administration Contact</span>
                    </a>
                </li>
                <li class="menu-title">Duty List</li>
                <li>
                    <a href="{{route('all.duty')}}" class="waves-effect">
                        <i class="ri-file-list-3-line"></i>
                        <span>General Sangat Duty List</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('nari.duty')}}" class="waves-effect">
                        <i class="ri-file-list-3-line"></i>
                        <span>Nari Duty List</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('pracharak.duty')}}" class="waves-effect">
                        <i class="ri-file-list-3-line"></i>
                        <span>My Duty List</span>
                    </a>
                </li>
                @if (Auth::user()->Area_Mukhi_Branch_Incharge == 'Y' || Auth::user()->role == 'superadmin')
                <li>
                    <a href="{{route('mukhi.general.duty')}}" class="waves-effect">
                        <i class="ri-file-list-3-line"></i>
                        <span>Mukhi’s General Satsang Duty list</span>
                    </a>
                </li>
                @endif
                @if (Auth::user()->Area_Mukhi_Branch_Incharge == 'Y' || Auth::user()->role == 'superadmin')
                <li>
                    <a href="{{route('mukhi.nari.duty')}}" class="waves-effect">
                        <i class="ri-file-list-3-line"></i>
                        <span>Mukhi’s Nari Satsang Duty list</span>
                    </a>
                </li>
                @endif
                @if (Auth::user()->Sector_Sanyojak == 'Y' || Auth::user()->role == 'superadmin')
                <li>
                    <a href="{{route('sanyojak.general.duty')}}" class="waves-effect">
                        <i class="ri-file-list-3-line"></i>
                        <span>Sector Sanyojak’s General Satsang Duty list</span>
                    </a>
                </li>
                @endif
                @if (Auth::user()->Sector_Sanyojak == 'Y' || Auth::user()->role == 'superadmin')
                <li>
                    <a href="{{route('sanyojak.nari.duty')}}" class="waves-effect">
                        <i class="ri-file-list-3-line"></i>
                        <span>Sector Sanyojak’s Nari Satsang Duty list</span>
                    </a>
                </li>
                @endif
                @endif

                <li class="menu-title">Notifications</li>

                <li>
                    <a href="{{route('sangat.notification')}}" class="waves-effect">
                        <i class="ri-bubble-chart-line"></i>
                        <span>Special Satsang Notification</span>
                    </a>
                </li>

                @if (Auth::user()->role != 'normal')
                <li>
                    <a href="{{route('pracharak.notification')}}" class="waves-effect">
                        <i class="ri-file-list-3-line"></i>
                        <span>Special Notification for Pracharak/Pracharika</span>
                    </a>
                </li>
                @endif
                @if (Auth::user()->Gyan_Pracharak == 'GP' || Auth::user()->role == 'superadmin')
                <li>
                    <a href="{{route('gyanpracharak.notification')}}" class="waves-effect">
                        <i class="ri-file-list-3-line"></i>
                        <span>Special Notification for Gyan Pracharak</span>
                    </a>
                </li>
                @endif
                @if (Auth::user()->Area_Mukhi_Branch_Incharge == 'Y' || Auth::user()->role == 'superadmin')
                <li>
                    <a href="{{route('mukhi.notification')}}" class="waves-effect">
                        <i class="ri-file-list-3-line"></i>
                        <span>Special Notification for Mukhi</span>
                    </a>
                </li>
                @endif
                @if (Auth::user()->Sector_Sanyojak == 'Y' || Auth::user()->role == 'superadmin')
                <li>
                    <a href="{{route('sanyojak.notification')}}" class="waves-effect">
                        <i class="ri-file-list-3-line"></i>
                        <span>Special Notification for Sector Sanyojak</span>
                    </a>
                </li>
                @endif
                @if (Auth::user()->Sewadal_Sanchalak == 'Y' || Auth::user()->role == 'superadmin')
                <li>
                    <a href="{{route('sewadal.notification')}}" class="waves-effect">
                        <i class="ri-file-list-3-line"></i>
                        <span>Special Notification for Sewadal Sanchalak</span>
                    </a>
                </li>
                @endif
                @if (Auth::user()->K_Sanchalak == 'Y' || Auth::user()->role == 'superadmin')
                <li>
                    <a href="{{route('kshetriya.notification')}}" class="waves-effect">
                        <i class="ri-file-list-3-line"></i>
                        <span>Special Notification for Kshetriya Sanchalak</span>
                    </a>
                </li>
                @endif
                <li class="menu-title">Others</li>
                <li>
                    <a href="{{route('all.satsang.details')}}" class="waves-effect">
                        <i class="ri-bubble-chart-line"></i>
                        <span>Satsang Details</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('bhawan.data.today.page')}}" class="waves-effect">
                        <i class="ri-bubble-chart-line"></i>
                        <span>Today’s Satsang Details</span>
                    </a>
                </li>

                {{-- <li>
                    <a href="{{route('bhawan.data.page2')}}" class="waves-effect">
                        <i class="ri-layout-masonry-line"></i>
                        <span>Satsang Bhawan</span>
                    </a>
                </li> --}}
                <li>
                    <a href="{{route('guideline.show')}}" class="waves-effect">
                        <i class="ri-list-check-2"></i>
                        <span>Guidelines</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="#" class="waves-effect">
                        <i class="ri-map-pin-time-line"></i>
                        <span>Latest Update</span>
                    </a>
                </li> --}}
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
                    <a href="{{route('support')}}" class="waves-effect">
                        <i class="ri-phone-line"></i>
                        <span>Support Team</span>
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
