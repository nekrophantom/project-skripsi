<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="{{ asset('/template') }}/images/user.png" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome, {{ session('auth_user')['nama'] }}</div>
                {{--<div class="email">{{ session('auth_user')['email'] }}</div>--}}
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        {{-- <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                        <li role="separator" class="divider"></li> --}}
                        <li><a href="{{ URL::to('logout') }}"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li>
                    <a href="{{ URL::to('/') }}">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                @if(session('auth_user')['role'] == 'admin')
                <li>
                    <a href="{{ URL::to('/user') }}">
                        <i class="material-icons">person</i>
                        <span>User</span>
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('/penyakit') }}">
                        <i class="material-icons">book</i>
                        <span>Penyakit</span>
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('/gejala') }}">
                        <i class="material-icons">format_list_bulleted</i>
                        <span>Gejala</span>
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('/rules') }}">
                        <i class="material-icons">notes</i>
                        <span>Rules</span>
                    </a>
                </li>
                @endif
                @if(session('auth_user')['role'] == 'user')
                <li>
                    <a href="{{ URL::to('analisa') }}">
                        <i class="material-icons">people</i>
                        <span>Analisa</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="#">
                        <i class="material-icons">book</i>
                        <span>Hasil Analisa</span>
                    </a>
                </li> -->
                @endif
                
                

                <!-- 
                
                <li>

                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">bookmark</i>
                        <span>Laporan</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{ URL::to('transaksi') }}">Transaksi</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('detail-transaksi') }}">Detail Transaksi</a>
                        </li>

                    </ul>
                </li>
               -->

            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; {{ date('Y') }} <a href="javascript:void(0);">Aplikasi Analytical Hierarchy Process</a>
            </div>
            {{-- <div class="version">
                <b>Version: </b> 1.0.5
            </div> --}}
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>
