<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="fa fa-home"></i><span> Dashboard</span>
                    </a>
                </li>

                <li>
                    <a target="_blank" href="{{ settings()->website }}" class="waves-effect">
                        <i class="fas fa-globe-africa"></i><span> Website</span>
                    </a>
                </li>

                @if (authInfo()->isAbleTo('view-users'))
                    <li>
                        <a href="{{ route('users.index') }}" class="waves-effect">
                            <i class="fa fa-users"></i><span> Users</span>
                        </a>
                    </li>
                @endif

                @if (authInfo()->isAbleTo('view-roles'))
                    <li>
                        <a href="{{ route('roles.index') }}" class="waves-effect">
                            <i class="fa fa-asterisk"></i><span> Roles</span>
                        </a>
                    </li>
                @endif

                @if (authInfo()->isAbleTo('view-settings'))
                    <li>
                        <a href="{{ route('settings') }}" class="waves-effect">
                            <i class="fas fa-cogs"></i><span> Settings</span>
                        </a>
                    </li>
                @endif

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Pages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        @if (authInfo()->isAbleTo('view-carousels'))
                            <li><a href="{{ route('carousels.index') }}">Slideshow</a></li>
                        @endif
                        @if (authInfo()->isAbleTo('view-company'))
                            <li><a href="{{ route('company.data') }}">About</a></li>
                        @endif
                        @if (authInfo()->isAbleTo('view-solutions'))
                            <li><a href="{{ route('solutions.index') }}">Solutions</a></li>
                        @endif
                        @if (authInfo()->isAbleTo('view-contacts'))
                            <li><a href="{{ route('contacts.index') }}">Contacts</a></li>

                        @endif
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
