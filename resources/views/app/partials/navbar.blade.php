    <!-- Navigation -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo -->
            <!-- <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a> -->

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <a class="navbar-brand logo-text" href="index.html"><img src="{{ asset('images/logo.png') }}" width="50px" alt="homepage" class="dark-logo" /></a>

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault" >
          <ul class="navbar-nav ms-auto navbar-nav-scroll">
              <li class="nav-item">
                  <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/posts">Booking Kelas</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/categories">Booking Fasilitas</a>
              </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false" href="#">Informasi</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li><a class="dropdown-item" href="article.html">Ruangan</a></li>
                            <li><a class="dropdown-item" href="terms.html">Jadwal Kelas</a></li>
                            <li><div class="dropdown-divider"></div></li>
                            <li><a class="dropdown-item" href="privacy.html">Fasilitas</a></li>
                            <li><a class="dropdown-item" href="privacy.html">Jadwal Fasilitas</a></li>
                        </ul>
                    </li>
                </ul>
            <ul class="navbar-nav ms-auto">
            @if (auth()->user())             
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/dashboard"><i class="fas fa-columns"></i> My Dashboard</a></li>
                <li><a class="dropdown-item" href="/dashboard"><i class="fas fa-user-edit"></i> Edit Akun</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ url('/logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
              </ul>
            </li>    
            @else              
            <li class="nav-item">
                <a href="/login"class="nav-link {{ Request::is('login') ? 'active' : '' }}"><i class="fas fa-sign-in-alt"></i> Login</a>
            </li>
            @endif
            </ul>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->