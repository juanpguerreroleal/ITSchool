@extends('layouts.base')

@section('title','Ajustes')

@section('content')
    <article class="w3-container w3-animate-top">
        <div id="contenido2" class="w3-row w3-container">
            <h1>Herramientas</h1>
            <form method="POST" action="{{ url('/Tools') }}" class="questionForm" id="q1" data-question="1">
                {!! csrf_field() !!}
                <?php  $theme = Auth::user()->theme?>
                <h2>Tema Actual - 
                    @if($theme == 1)
                        Noche
                    @elseif($theme == 2)
                        Soleado
                    @elseif($theme == 3)
                        Dia
                    @endif
                </h2>

                <ul type="none">
                    <li><input id="id1" type="radio" name="theme" value="{{ $theme=1 }}" checked="true"><label for="id1">Noche (Colores oscuros)</label></li>
                    <li><input id="id2" type="radio" name="theme" value="{{ $theme=2 }}"><label for="id2">Soleado (Colores brillantes)</label></li>
                    <li><input id="id3" type="radio" name="theme" value="{{ $theme=3 }}"><label for="id3">Dia (Colores claros)</label></li>
                </ul>
                <button type="submit">Actualizar tema</button>
            </form>
        </div>
    </article>


@endsection