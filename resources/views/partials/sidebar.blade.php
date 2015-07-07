<div id="menubar" class="menubar-inverse">
    <div class="menubar-fixed-panel">
        <div>
            <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="expanded">
            <a href="/">
                <span class="text-lg text-bold text-primary ">P.M.S</span>
            </a>
        </div>
    </div>
    <div class="menubar-scroll-panel">

        <!-- BEGIN MAIN MENU -->
        <ul id="main-menu" class="gui-controls">
            <!-- BEGIN DASHBOARD -->
            <li>
                <a href="/" class="{{ str_is('/',\Request::path())  ? 'active' : '' }}">
                    <div class="gui-icon"><i class="md md-home"></i></div>
                    <span class="title">Dashboard</span>
                </a>
            </li><!--end /menu-li -->
            <!-- END DASHBOARD -->

            <!-- BEGIN EMAIL -->
            <li class="{{ str_is('prisoner*',\Request::path())  ? 'active' : '' }} gui-folder">
                <a>
                    <div class="gui-icon"><i class="md md-person-outline"></i></div>
                    <span class="title">Prisoners</span>
                </a>
                <!--start submenu -->
                <ul>
                    <li><a href="{{ route('prisoner.create') }}" ><span class="title">Add Prison</span></a></li>
                    <li><a href="{{ route('prisoner.index') }}" ><span class="title">List of Prisoners</span></a></li>
                </ul><!--end /submenu -->
            </li><!--end /menu-li -->
            <!-- END EMAIL -->

            <li class="{{ str_is('guard*',\Request::path())  ? 'active' : '' }} gui-folder">
                <a>
                    <div class="gui-icon"><i class="fa fa-user-secret"></i></div>
                    <span class="title">Guards</span>
                </a>
                <!--start submenu -->
                <ul>
                    <li><a href="{{ route('guard.create') }}" ><span class="title">Add Guard</span></a></li>
                    <li><a href="{{ route('guard.index') }}" ><span class="title">List Guards</span></a></li>
                </ul><!--end /submenu -->
            </li><!--end /menu-li -->

            <li class="{{ str_is('cell*',\Request::path())  ? 'active' : '' }} gui-folder">
                <a>
                    <div class="gui-icon"><i class="fa fa-building-o"></i></div>
                    <span class="title">Cells</span>
                </a>
                <!--start submenu -->
                <ul>
                    <li><a href="{{ route('cell.create') }}" ><span class="title">Add Cell</span></a></li>
                    <li><a href="{{ route('cell.index') }}" ><span class="title">List Cells</span></a></li>
                </ul><!--end /submenu -->
            </li><!--end /menu-li -->

            <!-- BEGIN DASHBOARD -->
            <li class="{{ str_is('setting*',\Request::path())  ? 'active' : '' }}">
                <a href="html/layouts/builder.html" >
                    <div class="gui-icon"><i class="fa fa-gears"></i></div>
                    <span class="title">Settings</span>
                </a>
            </li><!--end /menu-li -->
            <!-- END DASHBOARD -->
        </ul><!--end .main-menu -->
        <!-- END MAIN MENU -->

        <div class="menubar-foot-panel">
            <small class="no-linebreak hidden-folded">
                <span class="opacity-75">Copyright &copy; {{ Carbon\Carbon::now()->year }}</span> <strong>PMS</strong>
            </small>
        </div>
    </div><!--end .menubar-scroll-panel-->
</div><!--end #menubar-->