<div class="sidebar-wrapper">
    <div class="sidebar sidebar-collapse" id="sidebar">
        <div class="sidebar__menu-group">
            <ul class="sidebar_nav">
                {{-- <li class="has-child">
                    <a href="#" class="active">
                        <span class="nav-icon uil uil-images"></span>
                        <span class="menu-text">Blog</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li class="active">
                            <a href="blog.html">style 1</a>
                        </li>
                        <li class="">
                            <a href="blog2.html">Style 2</a>
                        </li>
                    </ul>
                </li> --}}
                {{-- <li class="">
                    <a href="terms.html">
                        <span class="nav-icon uil uil-question-circle"></span>
                        <span class="menu-text">Terms & Conditions</span>
                    </a>
                </li> --}}
                <li class="">
                    <a href="{{ route('admin.loker.index') }}">
                        <span class="nav-icon uil uil-question-circle"></span>
                        <span class="menu-text">Loker</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('admin.data_pelamar.index') }}">
                        <span class="nav-icon uil uil-question-circle"></span>
                        <span class="menu-text">Data Pelamar</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('admin.input_loker.index') }}">
                        <span class="nav-icon uil uil-question-circle"></span>
                        <span class="menu-text">Data Input Loker</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>