<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-fixed sidebar-expand-md">
    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Sistem eKereta
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user-material">
            <div class="sidebar-user-material-body">
                <div class="card-body text-center">
                    <a href="#">
                        <img src="{{ asset('img/image.png') }}" class="img-fluid rounded-circle shadow-1 mb-3" width="80" height="80" alt="">
                    </a>
                    <h6 class="mb-0 text-white text-shadow-dark">{{ $user->name }}</h6>
                    <hr>
                    <span class="font-size-sm text-white text-shadow-dark">{{ $user->penggunaSistem->jabatan->kementerian->nama }}</span>
                    <br>
                    <span class="font-size-sm text-orange-300 text-shadow-dark">( {{ $user->penggunaSistem->jabatan->nama }} )</span>
                </div>

                <div class="sidebar-user-material-footer text-center text-shadow-dark">
                    <a><span style="text-transform: uppercase;">{{ $user->getRoleNames()->first() }}</span></a>
                </div>
            </div>
        </div>
        <!-- /user menu -->

        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                {{-- Dashboard --}}
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
                        <i class="icon-home4"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                {{-- /Dashboard --}}

                {{-- Kereta Jabatan --}}
                <li class="nav-item nav-item-submenu {{ Request::is('kjb*') ? 'nav-item-expanded nav-item-open' : '' }}">
                    <a href="#" class="nav-link"><i class="icon-office"></i> <span>KERETA JABATAN</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="KERETA JABATAN">
                        @hasrole('Pendaftar Agensi')
                            <li class="nav-item nav-item-submenu {{ in_array(Request::route()->getName(), ['kjb.agensi.create', 'kjb.agensi.edit']) ? 'nav-item-expanded nav-item-open' : '' }}">
                                <a href="#" class="nav-link">BORANG PESANAN</a>
                                <ul class="nav nav-group-sub">
                                    {{-- <li class="nav-item"><a href="{{ route('kjb.agensi.create') }}" class="nav-link {{ Request::route()->getName() == 'kjb.agensi.create' ? 'active' : '' }}">Kereta Jabatan Baru</a></li> --}}
									
                                    <li class="nav-item"><a href="{{ route('kjb.agensi.create') }}" class="nav-link {{ in_array(Request::route()->getName(), ['kjb.agensi.create', 'kjb.agensi.edit'])  ? 'active' : '' }}">Kereta Jabatan Baru</a></li>
									
                                    <li class="nav-item"><a href="{{ route('kjg.agensi.cariKjb') }}" class="nav-link {{ in_array(Request::route()->getName(), ['kjg.agensi.cariKjb'])  ? 'active' : '' }}">Kereta Jabatan Gantian</a></li>
                                </ul>
                            </li>
                        @endhasrole
                        <li class="nav-item nav-item-submenu {{ in_array(Request::route()->getName(), ['kjb.index', 'kjb.agensi.kelulusan', 'kjb.mof.semakanedit']) ? 'nav-item-expanded nav-item-open' : '' }}">
                            <a href="#" class="nav-link">SENARAI TINDAKAN</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="{{ route('kjb.index') }}" class="nav-link {{ in_array(Request::route()->getName(), ['kjb.index', 'kjb.agensi.kelulusan', 'kjb.mof.semakanedit']) ? 'active' : '' }}">Kereta Jabatan Baru</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Kereta Jabatan Gantian</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">STATUS PESANAN</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="#" class="nav-link">Kereta Jabatan Baru</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Kereta Jabatan Gantian</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                {{-- /Kereta Jabatan --}}

                {{-- Kereta Rasmi Jawatan --}}
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-user-tie"></i> <span>KERETA RASMI JAWATAN</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="KERETA RASMI JAWATAN">
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">BORANG PESANAN</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="#" class="nav-link">Kereta Rasmi Jawatan Baru</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Kereta Rasmi Jawatan Gantian</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">SENARAI TINDAKAN</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="#" class="nav-link">Kereta Rasmi Jawatan Baru</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Kereta Rasmi Jawatan Gantian</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">STATUS PESANAN</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="#" class="nav-link">Kereta Rasmi Jawatan Baru</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Kereta Rasmi Jawatan Gantian</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                {{-- /Kereta Rasmi Jawatan --}}

                {{-- OTP --}}
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-cart4"></i> <span>PEMBELIAN SEMASA BERSARA</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="PEMBELIAN SEMASA BERSARA">
                        <li class="nav-item"><a href="#" class="nav-link">BORANG PESANAN</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">SENARAI TINDAKAN</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">STATUS PESANAN</a></li>
                    </ul>
                </li>
                {{-- /OTP --}}
                <!-- /main -->

                <!-- Ultiliti -->
                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Ultiliti</div> <i class="icon-menu" title="Ultiliti"></i></li>

                {{-- Pegawai Perhubungan --}}
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-vcard"></i> <span>PEGAWAI HUBUNGAN</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="PEGAWAI HUBUNGAN">
                        <li class="nav-item"><a href="#" class="nav-link">Senarai Pegawai Hubungan</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Daftar Pegawai Hubungan</a></li>
                    </ul>
                </li>
                {{-- /Pegawai Perhubungan --}}

                {{-- Pengguna Sistem --}}
                {{-- <li class="nav-item nav-item-submenu nav-item-expanded nav-item-open"> --}}
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-users4"></i> <span>PENGGUNA AGENSI</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="PENGGUNA AGENSI">
                        <li class="nav-item"><a href="#" class="nav-link">Senarai Pengguna</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Daftar Pengguna</a></li>
                    </ul>
                </li>
                {{-- /Pengguna Sistem --}}
                <!-- /ultiliti -->

                <!-- Panduan -->
                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Rujukan</div> <i class="icon-menu" title="Panduan"></i></li>

                {{-- Pekeliling --}}
                <li class="nav-item"><a href="#" class="nav-link"><i class="icon-certificate"></i> <span>PEKELILING PERBENDAHARAAN</span></a></li>

                {{-- Panduan Pengguna --}}
                <li class="nav-item"><a href="#" class="nav-link"><i class="icon-file-text2"></i> <span>PANDUAN PENGGUNA</span></a></li>
                <!-- /panduan -->

                <!-- Pentadbir -->
                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">PENTADBIR</div> <i class="icon-menu" title="Pentadbir"></i></li>

                {{-- Model Kereta --}}
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-car"></i> <span>MODEL KERETA</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="MODEL KERETA">
                        <li class="nav-item"><a href="#" class="nav-link">Senarai Model Kereta</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Daftar Model Kereta</a></li>
                    </ul>
                </li>
                {{-- /Model Kereta --}}

                {{-- Jadual Pajakan --}}
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-calendar2"></i> <span>JADUAL PAJAKAN</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="JADUAL PAJAKAN">
                        <li class="nav-item"><a href="#" class="nav-link">Senarai Jadual Pajakan</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Daftar Jadual Pajakan</a></li>
                    </ul>
                </li>
                {{-- /Jadual Pajakan --}}

                {{-- Kereta Konsesi --}}
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-cc"></i> <span>KERETA KONSESI</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="KERETA KONSESI">
                        <li class="nav-item"><a href="#" class="nav-link">Senarai Kereta</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Daftar Kereta Konsesi</a></li>
                    </ul>
                </li>
                {{-- /Kereta Konsesi --}}

                {{-- Pengguna Sistem --}}
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-users2"></i> <span>PENGGUNA SISTEM</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="PENGGUNA SISTEM">
                        <li class="nav-item"><a href="#" class="nav-link">Senarai Pengguna</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Daftar Pengguna</a></li>
                    </ul>
                </li>
                {{-- /Pengguna Sistem --}}
                <!-- /pentadbir -->

            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->
