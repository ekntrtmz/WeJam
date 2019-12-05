<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>wejam.in</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600|Dr+Sugiyama&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }
        </style>

    </head>
    <body>
        <div id="app">
                <welcome-hero>
                    <template v-slot:welcome-navigation>
                    @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">
                                {{ __('Home') }}
                            </a>
                        @else
                            <a href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">
                                    {{ __('Register') }}
                                </a>
                            @endif
                        @endauth
                    </div>
                    @endif
                    </template>
                    <template v-slot:welcome-slogan>
                        {{ __('Connect with real people in real moments.') }}
                    </template>
                </welcome-hero>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
