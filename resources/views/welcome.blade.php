<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>wejam.in</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600|Dr+Sugiyama&display=swap" rel="stylesheet">


        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
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

            .full-height {
                height: 100vh;
                background: url('/img/wejammin-barcelona.jpg'), rgba(0,0,0,0.65);
                background-blend-mode: overlay;
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                color: #fff!important;
            }

            .title {
                font-size: 94px;
                font-family: 'Dr Sugiyama', cursive;
                color: #fff!important;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;

            }

            .links > a:hover {
                color: #c0392b;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


            .city {
                font-family: 'Nunito', sans-serif;
                font-size: 100px;
                letter-spacing: 10px;
                text-transform: uppercase;
                margin-top: 35px;
                margin-bottom: 35px;
            }

            .slogan{
                font-size: 34px;
            }

            .typewriter {
                overflow: hidden; /* Ensures the content is not revealed until the animation */
                border-right: 5px solid #ffffff; /* The typwriter cursor */
                white-space: nowrap; /* Keeps the content on a single line */
                margin: 0 auto; /* Gives that scrolling effect as the typing happens */
                letter-spacing: .15em; /* Adjust as needed */
                animation:
                    typing .5s steps(20, end),
                    blink-caret 1.2s step-end infinite;
            }

            /* The typing effect */
            @keyframes typing {
                from { width: 0 }
                to { width: 100% }
            }

            /* The typewriter cursor effect */
            @keyframes blink-caret {
                from, to { border-color: transparent }
                50% { border-color: #ffffff; }
            }

            .top-right {
                display: none;
            }

            @media only screen and (max-width:48em) {
                .title {
                    font-size: 46px;
                    margin-bottom: 0px !important;
                }

                .city {
                    font-size: 45px;
                }

                .slogan {
                    font-size: 18px;
                }

                .typewriter {
                    border-right: 1px solid #ffffff;
                }
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title ">
                    wejammin`
                </div>
                <div class="city typewriter">
                    Barcelona
                </div>
                <div class="slogan m-b-md">
                    Connect with real people in real moments.
                </div>
                <a href="/bcn" class="button is-primary is-large-desktop">
                    {{ __('JAM in BCN') }}
                </a>
            </div>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
