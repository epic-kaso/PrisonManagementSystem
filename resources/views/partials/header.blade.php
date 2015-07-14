<header id="header" >
    <div class="headerbar">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="headerbar-left">
            <ul class="header-nav header-nav-options">
                <li class="header-nav-brand" >
                    <div class="brand-holder">
                        <a href="html/dashboards/dashboard.html">
                            <span class="text-lg text-bold text-primary">P.I.M.S</span>
                        </a>
                    </div>
                </li>
                <li>
                    <a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="headerbar-right">
            <ul class="header-nav header-nav-profile">
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
                        <span><span class="fa fa-user"></span></span>
								<span class="profile-info">
									{{ Auth::user()->last_name }}
									<small>{{ Auth::user()->role }}</small>
								</span>
                    </a>
                    <ul class="dropdown-menu animation-dock">
                        {{--<li class="dropdown-header">Config</li>--}}
                        {{--<li><a href="html/pages/profile.html">My profile</a></li>--}}
                        {{--<li class="divider"></li>--}}
                        {{--<li><a href="html/pages/locked.html"><i class="fa fa-fw fa-lock"></i> Lock</a></li>--}}
                        <li><a href="{{ url('auth/logout') }}"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
                    </ul><!--end .dropdown-menu -->
                </li><!--end .dropdown -->
            </ul><!--end .header-nav-profile -->
            <ul class="header-nav header-nav-toggle">
                <li>
                    <a class="btn btn-icon-toggle btn-default" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">
                        <i class="fa fa-ellipsis-v"></i>
                    </a>
                </li>
            </ul><!--end .header-nav-toggle -->
        </div><!--end #header-navbar-collapse -->
    </div>
</header>