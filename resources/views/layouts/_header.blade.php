<header class="header-top">
    <nav class="navbar navbar-light">
        <div class="navbar-left">
            <div class="logo-area">
                {{-- <a class="navbar-brand" href="index.html">
                    <img class="dark" src="img/logo-dark.png" alt="logo">
                    <img class="light" src="img/logo-white.png" alt="logo">
                </a> --}}
                {{-- <a href="#" class="sidebar-toggle">
                    <img class="svg" src="img/svg/align-center-alt.svg" alt="img"></a> --}}
                    <p>BKK MUTU</p>
            </div>
        </div>

        <div class="navbar-right">
            <ul class="navbar-right__menu">
            
                <li class="nav-author">
                    <div class="dropdown-custom">
                        <a href="javascript:;" class="nav-item-toggle">
                            {{-- <img src="img/author-nav.jpg" alt="" class="rounded-circle"> --}}
                            <span class="nav-item__title">Admin<i class="las la-angle-down nav-item__arrow"></i></span>
                        </a>
                        <div class="dropdown-parent-wrapper">
                            <div class="dropdown-wrapper">
                                <div class="nav-author__info">
                                    {{-- <div class="author-img">
                                        <img src="img/author-nav.jpg" alt="" class="rounded-circle">
                                    </div> --}}
                                    <div>
                                        <h6>{{ auth()->user()->name }}</h6>
                                        {{-- <span>UI Designer</span> --}}
                                    </div>
                                </div>
                                <div class="nav-author__options">
                                    {{-- <ul>
                                        <li>
                                            <a href="#">
                                                <i class="uil uil-user"></i> Profile</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="uil uil-setting"></i>
                                                Settings</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="uil uil-key-skeleton"></i> Billing</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="uil uil-users-alt"></i> Activity</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="uil uil-bell"></i> Help</a>
                                        </li>
                                    </ul> --}}
                                    <a href="{{ route('logout') }}" class="nav-author__signout">
                                        <i class="uil uil-sign-out-alt"></i> Sign Out</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </li>

            </ul>

            <div class="navbar-right__mobileAction d-md-none">
                <a href="#" class="btn-search">
                    <img src="img/svg/search.svg" alt="search" class="svg feather-search">
                    <img src="img/svg/x.svg" alt="x" class="svg feather-x"></a>
                <a href="#" class="btn-author-action">
                    <img class="svg" src="img/svg/more-vertical.svg" alt="more-vertical"></a>
            </div>
        </div>

    </nav>
</header>