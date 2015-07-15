<header id="header" >
    <div class="headerbar">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="headerbar-left">
            <ul class="header-nav header-nav-options">
                <li class="header-nav-brand" >
                    <div class="brand-holder">
                        <a href="/">
                            <img src="/img/naija.png" alt="">
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

        <div class="headerbar-center">
            <div class="pull-right">
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
                            <li><a href="{{ route('profile.show',Auth::user()) }}"><i class="fa fa-fw fa-user"></i> My Profile</a></li>
                            <li><a href="{{ url('auth/logout') }}"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
                        </ul><!--end .dropdown-menu -->
                    </li><!--end .dropdown -->
                </ul><!--end .header-nav-profile -->
            </div>
            <div style="display: inline-block;margin-left: 250px;">
                <h4>FEDERAL REPUBLIC OF NIGERIA</h4>
                <h1>NIGERIAN PRISON SERVICE</h1>
                <p>Anambra State Command, Amaobia.</p>
            </div>

        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
    </div>
</header>