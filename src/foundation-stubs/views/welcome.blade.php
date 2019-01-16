<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel {{ app()->version() }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
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
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .versioninfo {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
            }

            .framwork_title {
                font-weight: 600;
                padding-top: 20px;
            }


            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">{{ __('Home') }}</a>
                    @else
                        <a href="{{ url('/login') }}">{{ __('Login') }}</a>
                        <a href="{{ url('/register') }}">{{ __('Register') }}</a>
                    @endif
                </div>
            @endif

            <div class="content">

                <div class="title m-b-md">
                    Laravel
                    <p class="versioninfo">{{ __('Version') }} {{ app()->version() }}</p>
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">{{ __('Documentation') }}</a>
                    <a href="https://laracasts.com">{{ __('Laracasts') }}</a>
                    <a href="https://laravel-news.com">{{ __('News') }}</a>
                    <a href="https://forge.laravel.com">{{ __('Forge') }}</a>
                    <a href="https://github.com/laravel/laravel">{{ __('GitHub') }}</a>
                </div>

                <div class="foundation_button_test">
                    <p class="framwork_title">Zurb Foundation 6.5.0</p>
                    <a class="button primary" href="#">Primary</a>
                    <a class="button secondary" href="#">Secondary</a>
                    <a class="button success" href="#">Success</a>
                    <a class="button alert" href="#">Alert</a>
                    <a class="button warning" href="#">Warning</a>
                </div>

            </div>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
