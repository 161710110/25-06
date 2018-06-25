<!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <style type="text/css">
                        .margin{
                            margin-top: 50px;
                        }
                    </style>
                    <img src="/assets/admin/images/icon/assalaam.png" class="margin" alt="Cool Admin" />
                </a>
                <br />
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        
                        <li>
                            <a href="{{ route('home') }}">
                                <i class="fas fa-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="{{ route('jurusan.index') }}">
                                <i class="fas fa-chart-bar"></i>Jurusan</a>
                        </li>
                        <li>
                            <a href="{{ route('kelas.index') }}">
                                <i class="fas fa-table"></i>Kelas</a>
                        </li>
                        <li>
                            <a href="{{ route('siswa.index') }}">
                                <i class="far fa-check-square"></i>Siswa</a>
                        </li>
                        <li>
                            <a href="{{ route('absen.index') }}">
                                <i class="fas fa-calendar-alt"></i>Absen</a>
                        </li>
                        
                       
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->