@extends('layouts.base')

@section('title','Ajustes')

@section('content')
    <article class="w3-container w3-animate-top">
        <div id="contenido2" class="w3-row w3-container">
<?php
$id = Auth::user()->id;
$nombre = Auth::user()->name;
$correo = Auth::user()->email;
$html1 = Auth::user()->activity1;
$html2 = Auth::user()->activity2;
$html3 = Auth::user()->activity3;

function validadorActs($actividad){
    $resul = "";
    if ($actividad == 1) {
        $resul = "Completada";
    }
    else{
        $resul = "No completada";
    }
    return $resul;
}
?>
            <h1>Perfil</h1>
            <h3>Informacion del usuario</h3>
            <h5>Id: {{ $id }}     Nombre: {{ $nombre }}</h5>
            <h5>Email: {{ $correo }}</h5>
            <h3>Curso HTML</h3>
            <h5>Actividad 1: {{ validadorActs($html1) }}</h5>
            <h5>Actividad 2: {{ validadorActs($html2) }}</h5>
            <h5>Actividad 3: {{ validadorActs($html3) }}</h5>
        </div>
    </article>


@endsection