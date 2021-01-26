<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{route('home')}}" class="waves-effect">
                        <i class="fa fa-home"></i><span> Dashboard</span>
                    </a>
                </li>
                @if (authInfo()->isAbleTo('view-users'))
                <li>
                    <a href="{{route('users.index')}}" class="waves-effect">
                        <i class="fa fa-users"></i><span> Users</span>
                    </a>
                </li>
                @endif

                @if (authInfo()->isAbleTo('view-roles'))
                <li>
                    <a href="{{route('roles.index')}}" class="waves-effect">
                        <i class="fa fa-asterisk"></i><span> Roles</span>
                    </a>
                </li>
                @endif

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Pages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('solutions')}}">Solutions</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->