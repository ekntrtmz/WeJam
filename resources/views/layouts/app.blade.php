<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar is-primary" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item brand-text" href="/">wejam</a>

                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                </a>
            </div>
            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                <a class="navbar-item">
                    Home
                </a>

                <a class="navbar-item">
                    Documentation
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
                <div class="navbar-item">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <div class="field has-addons">
                                <p class="control">
                                    <button class="button is-static">
                                    <span class="icon is-small">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </span>
                                    </button>
                                </p>
                                <p class="control is-expanded">
                                    <button class="button" aria-haspopup="true" aria-controls="dropdown-menu-city">
                                        <span>Barcelona</span>
                                        <span class="icon is-small">
                                            <i class="fas fa-angle-down" aria-hidden="true"></i>
                                        </span>
                                    </button>
                                </p>
                            </div>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu-city" role="menu">
                            <div class="dropdown-content">
                            <div class="dropdown-item">
                                <p>You can insert <strong>any type of content</strong> within the dropdown menu.</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                @guest
                <div class="navbar-item">
                    <div class="buttons">
                    @if (Route::has('register'))
                    <a class="button is-primary" href="{{ route('register') }}">
                        <strong>{{ __('Register') }}</strong>
                    </a>
                    @endif
                    <a class="button is-primary is-outlined is-inverted" href="{{ route('login') }}">
                        {{ __('Login') }}
                    </a>
                    </div>
                </div>
                @else
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        {{ Auth::user()->username }}
                    </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item">
                        <span class="icon is-small"><i class="fas fa-user-circle"></i></span>
                        <span>Profile</span>
                        </a>
                        <a class="navbar-item">
                        <span class="icon is-small"><i class="fas fa-cog"></i></span>
                        <span>Settings</span>
                        </a>
                        <hr class="navbar-divider">
                        <a
                            class="navbar-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span class="icon is-small"><i class="fas fa-sign-out-alt"></i></span>
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
        </nav>
        <main class="content">
            @yield('content')
        </main>
    </div>
</body>
</html>
