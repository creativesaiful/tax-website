<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navigation</li>

                <li class="{{ Request::is('dashboard') ? 'mm-active' : ''}}">
                    <a href="{{ route('dashboard') }}">
                        <i class="fe-airplay"></i>
                        
                        <span> Dashboard </span>
                    </a>
                </li>

                <li class="{{ Request::is('notices*') ? 'mm-active' : ''}}">
                    <a href="javascript: void(0);">
                        <i class="fe-briefcase"></i>
                        <span> Notice Board </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ route('notices')}}" class="{{ Request::is('notices') ? 'active' : ''}}">Notices</a></li>
                        
                        <li><a href="{{ route('notices.create')}}" class="{{ Request::is('notices.create') ? 'active' : ''}}">Add Notice</a></li>
                         
                    </ul>
                </li>

             
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>