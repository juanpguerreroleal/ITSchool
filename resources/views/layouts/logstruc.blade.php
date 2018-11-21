<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ITSchool') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('codemirror/js/1.12.4/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('codemirror/js/1.12.4/jquery-ui.js') }}" type="text/javascript"></script>

        <link rel="stylesheet" href="{{ asset('codemirror/lib/codemirror.css') }}"></script>
        <script src="{{ asset('codemirror/lib/codemirror.js') }}" type="text/javascript"  ></script>
        <script src="{{ asset('codemirror/lib/xml.js') }}" type="text/javascript"  ></script>
        <script src="{{ asset('codemirror/lib/javascript.js') }}" type="text/javascript"  ></script>
        <script src="{{ asset('codemirror/lib/css.js') }}" type="text/javascript"  ></script>
        <script src="{{ asset('codemirror/lib/closetag.js') }}" type="text/javascript"  ></script>
        <script src="{{ asset('codemirror/js/custom.js') }}" type="text/javascript"></script>
</head>

<style>

          body{
            overflow: scroll;
          }
          .navbar{
            background-color: #424344;
          }

          #titletext{
            color: white;
            font-weight: bold;
          }

          #navbarDropdown{
            color: white;
            font-weight: bold;
          }
          .card-header{
            background-color: #424344;
          }

          .row{
            margin: 40px;
          }

          h4{
            font-weight: bold;
            color: white;
          }

          #linked{
            font-weight: bold;
            color: white;
          }

          .zoom {
         padding: 50px;
         transition: transform .2s;
         margin: 0 auto;
         }

          .zoom:hover {
          transform: scale(1.5); 
          }

          .CodeMirror {
          height: auto;
          }


          #submit{
              background-color: #424344;
    border: none;
    color: white;
    margin-top: 10px;
    padding: 7px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
          }
</style>

<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
