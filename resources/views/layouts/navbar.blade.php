<nav class="navbar is-primary is-spaced" role="navigation" aria-label="main navigation">
  <div class="container">
        <div class="navbar-brand">
{{--                 <a class="navbar-item" href="https://bulma.io">
                    <img src="{{ url('/img/wejam_logo.png') }}" width="100" height="40">
                </a> --}}
                <a id="brand-logo-text" class="navbar-item" href="/">
                    <span>wejam</span>
                </a>

                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                </a>
            </div>
            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                <a href="/cities" class="navbar-item {{ request()->routeIs('cities.*') ? 'is-active' : ''}}">
                    Cities
                </a>
                <a href="/jams" class="navbar-item {{ request()->routeIs('jams.*') ? 'is-active' : ''}}">
                    Jams
                </a>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                    More
                    </a>

                    <div class="navbar-dropdown">
                    <a class="navbar-item">
                        About
                    </a>
                    <a class="navbar-item">
                        Jobs
                    </a>
                    <a class="navbar-item">
                        Contact
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item">
                        Report an issue
                    </a>
                    </div>
                </div>
                </div>

                <div class="navbar-end">
                @guest
                <div class="navbar-item">
                    @if (Route::has('register'))
                    <a class="button is-primary is-spaced" href="{{ route('register') }}">
                        <strong>{{ __('Register') }}</strong>
                    </a>
                    @endif
                    <a class="button is-narrow is-primary is-outlined is-inverted is-spaced" href="{{ route('login') }}">
                        {{ __('Login') }}
                    </a>
                </div>
                @else
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        <span class="icon" style="margin-right:7px;margin-left:7px;">
                            @if(Auth::user()->isAdmin)
                            <i class="fas fa-user-shield" ></i>
                            @else
                            <i class="fas fa-user-circle" ></i>
                            @endif
                        </span>
                        {{ Auth::user()->username }}
                    </a>
                    <div class="navbar-dropdown ">
                        <a class="navbar-item">
                        <span class="icon is-medium">
                            <i class="fas fa-guitar"></i>
                        </span>
                        <span>Your Jams</span>
                        </a>
                        <a class="navbar-item">
                        <span class="icon is-medium">
                            <i class="fas fa-cog"></i>
                        </span>
                        <span>Settings</span>
                        </a>
                        <hr class="navbar-divider">
                        <a
                            class="navbar-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span class="icon is-medium"><i class="fas fa-sign-out-alt"></i></span>
                        <span>{{ __('Logout') }}</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
                @endguest
                </div>
            </div>
  </div>
</nav>
