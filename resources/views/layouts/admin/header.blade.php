<header id="page-topbar">
        <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{asset('/assets/images/logo-sm.png')}}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{asset('/assets/images/logo-dark.png')}}" alt="" height="17">
                        </span>
                    </a>

                    <a href="{{route('admin.dashboard')}}" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{asset('/assets/images/logo-sm.png')}}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{asset('/assets/images/logo-light.png')}}" alt="" height="17">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger material-shadow-none" id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
                <div class="float-right position-absolute d-flex" style="left:87%;top:25%">
                    <i class="fs-1 fa-solid fa-right-from-bracket"></i>
                    <a href="{{ route('logout') }}" class="mt-1 ms-3">Logout</a>
                </div>
            </div>


        </div>
    </div>
    </header>
