<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{ asset('js/particles.js') }}" type="text/javascript" defer="defer"></script>
        <script src="{{ asset('js/particles.min.js') }}" type="text/javascript" defer="defer"></script>
        <script src="{{ asset('js/app2.js') }}" type="text/javascript" defer="defer"></script>

        <title>ITSchool</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                padding: 0;
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
                vertical-align: center;
                top: 400px;
            }

            .content {
                text-align: center;
                position: absolute;
                vertical-align: center;
                top: 250px;
            }

            .title {
                font-size: 84px;
                color: #f2f4f4;
            }

            .links > a {
                color: #f2f4f4;;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            #particles-js{
                height: 100%;
                background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url('{{ url('img/forum.jpg') }}');
                background-size: cover;
                background-position: center;
            }

        </style>
    </head>
    <body>
    
    @if (Auth::check())
        <div id="particles-js" class="flex-center position-ref full-height">
            <div class="top-right links">
                <a href="{{ route('main') }}">Inicio</a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Salir</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}
                </form>
            </div>
            <div class="content">
                <div class="title m-b-md">
                    ITSchool
                </div>
            </div>
        </div>
    @else
        <div id="particles-js" class="flex-center position-ref full-height">
                <div class="top-right links">
                        <a href="{{ route('login') }}">Ingresar</a>
                        <a href="{{ route('register') }}">Registrar</a>
                </div>
            <div class="content">
                <div class="title m-b-md">
                    ITSchool
                </div>
            </div>
        </div>
    @endif
    </body>
</html>
