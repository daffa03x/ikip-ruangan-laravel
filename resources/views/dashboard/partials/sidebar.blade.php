        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ url('admin/dashboard') }}"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Data</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="{{ url('admin/ruangan') }}"
                                aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-closed mr-2" viewBox="0 0 16 16">
                                <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z"/>
                                <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z"/>
                                </svg><span
                                    class="hide-menu">Ruangan
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ url('admin/angkatan') }}"
                                aria-expanded="false"><i data-feather="users" class="feather-icon"></i><span
                                    class="hide-menu">Angkatan</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ url('admin/fakultas') }}"
                                aria-expanded="false"><i data-feather="square" class="feather-icon"></i><span
                                    class="hide-menu">Fakultas</span></a></li>

                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Data</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link" href="{{ url('admin/prodi') }}"
                                aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-closed mr-2" viewBox="0 0 16 16">
                                <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z"/>
                                <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z"/>
                                </svg><span
                                    class="hide-menu">Prodi
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ url('admin/matkul') }}"
                                aria-expanded="false"><i data-feather="users" class="feather-icon"></i><span
                                    class="hide-menu">Mata Kuliah</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ url('admin/jadwal_kelas') }}"
                                aria-expanded="false"><i data-feather="square" class="feather-icon"></i><span
                                    class="hide-menu">Jadwal Kelas</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ url('admin/jadwal_kelas') }}"
                                aria-expanded="false"><i data-feather="square" class="feather-icon"></i><span
                                    class="hide-menu">Jadwal Fasilitas</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Data</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="{{ url('admin/fasilitas_kampus') }}"
                                aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-closed mr-2" viewBox="0 0 16 16">
                                <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z"/>
                                <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z"/>
                                </svg><span
                                    class="hide-menu">Fasilitas Kampus
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ url('admin/booking_fasilitas') }}"
                                aria-expanded="false"><i data-feather="users" class="feather-icon"></i><span
                                    class="hide-menu">Booking Fasilitas</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ url('admin/booking_kelas') }}"
                                aria-expanded="false"><i data-feather="square" class="feather-icon"></i><span
                                    class="hide-menu">Booking Kelas</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Authentication</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="authentication-login1.html"
                                aria-expanded="false"><i data-feather="lock" class="feather-icon"></i><span
                                    class="hide-menu">User
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link"
                                href="authentication-register1.html" aria-expanded="false"><i data-feather="lock"
                                    class="feather-icon"></i><span class="hide-menu">Role
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ url('/logout') }}"
                                aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                    class="hide-menu">Logout</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>