<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm main-header fixed-top">
    <div class="container">
        <img src="{{ asset('asset/images/logo_sman6.jpeg') }}" alt="Logo" style="max-height: 35px; margin-right: 2px;">
        <a class="navbar-brand" href="{{ url('/') }}" style="font-size: 16px; display: flex; flex-direction: column;">
            <span style="font-size: 14px;">PERPUSTAKAAN</span>
            <small style="font-size: 10px;">SMA Negeri 6 Mandau</small>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            @if (request()->path() !== 'keranjang')
                <!-- Periksa apakah bukan halaman keranjang -->
                <ul class="navbar-nav me-auto">
                    <!-- Tambahkan tombol-tombol baru di sini -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('active-visimisi')" href="/visimisi">Visi & Misi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tata-tertib">Tata Tertib</a>
                    </li>
                    @guest
                        <!-- Tautan Buku Tamu hanya muncul jika pengguna belum login -->
                        <li class="nav-item">
                            <a class="nav-link @yield('active-tamu')" href="/bukutamu">Tamu</a>
                        </li>
                    @endguest
                </ul>
            @endif

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    @if ($count >= 0)
                        <li class="nav-item">
                            <a class="nav-link" href="/keranjang"> Keranjang <span
                                    class="badge text-bg-primary">{{ $count }}</span></a>
                        </li>
                    @endif
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} ({{ Auth::user()->jenis }})
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>