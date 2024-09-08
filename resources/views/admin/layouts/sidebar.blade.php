    <!-- Sidebar -->
    <div class="sidebar" data-background-color="white">
        <div class="sidebar-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="white">
                <a href="{{ route('dashboard') }}" class="logo">
                    <img src="{{ asset('assets') }}/img/logo/logo.png" alt="navbar brand" class="navbar-brand"
                        height="70" />
                </a>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="gg-menu-right"></i>
                    </button>
                    <button class="btn btn-toggle sidenav-toggler">
                        <i class="gg-menu-left"></i>
                    </button>
                </div>
                <button class="topbar-toggler more">
                    <i class="gg-more-vertical-alt"></i>
                </button>
            </div>
            <!-- End Logo Header -->
            {{-- active --}}
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <ul class="nav nav-secondary">
                    <li class="nav-item @yield('Dashboard')">
                        <a href="{{ route('dashboard') }}">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Components</h4>
                    </li>
                    <li class="nav-item @yield('Toures')">
                        <a data-bs-toggle="collapse" href="#base">
                            <i class="fas fa-layer-group"></i>
                            <p>Tours</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="base">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('kategori.index') }}">
                                        <span class="sub-item">kategori</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('tours.index') }}">
                                        <span class="sub-item">Tours</span>
                                    </a>
                                </li>
                                {{-- @if (Auth::user()->role == 'contentmanager') --}}
                                {{-- <li>
                                    <a href="{{ route('artikels.index') }}">
                                        <span class="sub-item">Artikel</span>
                                    </a>
                                </li> --}}
                                {{-- @endif --}}
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @yield('Booking')">
                        <a data-bs-toggle="collapse" href="#sidebarLayouts">
                            <i class="fas fa-th-list"></i>
                            <p>Booking</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="sidebarLayouts">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('bookings.index') }}">
                                        <span class="sub-item">data booking</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @yield('Transaksi')">
                        <a data-bs-toggle="collapse" href="#forms">
                            <i class="fas fa-pen-square"></i>
                            <p>Transaksi</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="forms">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('transaksi.index') }}">
                                        <span class="sub-item">Transaksi</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item @yield('Sponsor')">
                        <a data-bs-toggle="collapse" href="#Sponsor">
                            <i class="fas fa-pen-square"></i>
                            <p>Sponsor</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="Sponsor">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('sponsor.index') }}">
                                        <span class="sub-item">Sponsor</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item @yield('merch')">
                        <a data-bs-toggle="collapse" href="#merch">
                            <i class="fas fa-pen-square"></i>
                            <p>Merch</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="merch">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('merch.index') }}">
                                        <span class="sub-item">Merchandiser</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item @yield('merch')">
                        <a data-bs-toggle="collapse" href="#image">
                            <i class="fas fa-pen-square"></i>
                            <p>Source image</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="image">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('gambar.index') }}">
                                        <span class="sub-item">image</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-item @yield('Tables')">
                        <a data-bs-toggle="collapse" href="#tables">
                            <i class="fas fa-table"></i>
                            <p>Akun</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="tables">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('register-acount') }}">
                                        <span class="sub-item">Daftar Akun</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('user-acount') }}">
                                        <span class="sub-item">Kelola Akun</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
