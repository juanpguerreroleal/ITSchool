<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{ asset('js/vue.js') }}"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
        <?php $theme = Auth::user()->theme?>
        @if($theme == 1)
            <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css') }}">
        @elseif($theme == 2)
            <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos2.css') }}">
        @elseif($theme == 3 )
            <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos3.css') }}">
        @endif
        <link rel="stylesheet" type="text/css" href="{{ asset('css/w3.css') }}">
        <title>ITSchool - @yield('title')</title>
        <script type="text/javascript">
        var x = 0;

        function overButton(id){
            if( id == "n1" || id == "n2" || id == "n3"){
                
            }
            else if (id != "op3"){
                document.getElementById(id).style.filter= "drop-shadow(3px 3px 3px #000000)";
            }
            document.getElementById(id).style.cursor = "pointer";

        }
        function leaveButton(id){
            if( id == "n1" || id == "n2" || id == "n3"){
                document.getElementById(id).style.color = "white";
            }
            else if (id != "op3"){
                document.getElementById(id).style.filter="drop-shadow(4px 4px 4px #000000)";
            }
        }
        function clickButton(id){
            if(id == "op2" || id == "op4" || id == "op5" || id == "contenedor1" || id == "contenedor2" || id == "contenedor3"){
                document.getElementById(id).style.filter = "blur(1px)";
                document.getElementById(id).style.filter="drop-shadow(1px 1px 1px #000000)";
            }
            else if ( id == "n1" || id == "n2" || id == "n3"){
                document.getElementById(id).style.color = "#1a1a1a";
            }
        }
        function upButton(id){
            if( id == "log" || id == "op2" || id == "op3" || id == "op4" || id == "op5"){
                document.getElementById(id).style.filter = "blur(0px)";
            }
        }

        document.addEventListener('DOMContentLoaded', init, false);
        //Usar dos divs usar fondo color y superior transparente.
        function init(){
            console.log("Pagina cargada");
            page = 1;
        }
        function expandir(id){
            var x = document.getElementById(id);
            if ( x.className.indexOf("w3-show") == -1 ) {
                x.className += " w3-show";
                x.previousElementSibling.className = x.previousElementSibling.className.replace("w3-black", "w3-red");
            } else { 
                x.className = x.className.replace(" w3-show", "");
                x.previousElementSibling.className = x.previousElementSibling.className.replace("w3-red", "w3-black");
            }
        }    
        </script>
        <style>
             .w3-lato{
            font-family: 'Lato', sans-serif;
            }
        </style>
    <body class="w3-container w3-lato">
        <section  id="main" class="w3-container">
            <section class="w3-section w3-animate-top">
                <table>
                    <tr>
                        <td><img src="{{ asset('img/Logo.png') }}" onclick="window.location='{{route('main')}}'" width="80%" alt="Logo" class="w3-hover-opacity"></td>
                        <td id="n1" onmouseover="overButton('n1')" onmouseleave="" onmousedown="" onmouseup="" class="w3-bottombar w3-border-white w3-hover-border-grey" title="Menu principal." onclick="window.location='{{ route('main') }}'""><bold>Inicio</bold></td>
                        <td id="n2" onmouseover="overButton('n2')" onmouseleave="" onmousedown="" onmouseup="" class="w3-bottombar w3-border-white w3-hover-border-grey" title="Clic aqui para visualizar los cursos." onclick="window.location='{{ route('courses') }}'""><bold>Cursos</bold></td>
                        <td id="n3" onmouseover="overButton('n3')" onmouseleave="" onmousedown="" onmouseup="" class="w3-bottombar w3-border-white w3-hover-border-grey" title="Clic aqui para conocer sobre ITSchool." onclick="window.location='{{ route('about') }}'""><bold>About</bold></td>
                    </tr>
                </table>
            </section>
            <br/>
            @yield('content')
        </section>
        <footer class="w3-container">
            <p>Equipo 5 Laboratorio de Interaccion Humano-Computadora</p>
            <p>Facultad de Ingenieria Mecanica y Electrica</p>
                <?php 
                 $user = Auth::user()->name ?>
                <p> Inicio sesion como {{ $user }} </p>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}
                </form>
        </footer>
    </body>
</html>