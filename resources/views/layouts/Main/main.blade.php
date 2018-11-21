@extends('layouts.base')

@section('title','Inicio')

@section('content')
    <article class="w3-container w3-animate-top">
        <div id="cont" class="w3-row w3-container">
            <div id="op1" class="w3-col s12 m6 l6 w3-container">
                <h1>ITSchool</h1>
                <p>Bienvenido al sitio ITSchool, plataforma de aprendizaje tipo e-learning, mediante este proyecto nosotros buscamos facilitar el aprendizaje de tecnologias de la informacion a cualquiera que desee hacerlo con motivos ya sean academicos, laborales, entre otros.</p>
            </div>
            <div  class="w3-container w3-col s12 m6 l6 w3-container">
                <div class="w3-row-padding w3-container">
                    <div id="op2" class="w3-col s5 m5 l5 w3-margin w3-mobile w3-container w3-hover-opacity"  onmousedown="clickButton('op2')" onmouseup="upButton('op2')" onmouseover="overButton('op2')" onmouseleave="leaveButton('op2')" title="Presiona para visualizar las actualizaciones realizadas en la plataforma." onclick="window.location='{{ route('updates') }}'"><h2>Actualizaciones</h2>
                    <p></p>
                    </div>
                    <div id="op3" class="w3-col s5 m5 l5 w3-margin w3-mobile w3-container"  onmousedown="alert('Funcion Inactiva')" onmouseover="overButton('op3')" onmouseleave="leaveButton('op3')" title="Presiona para entrar al foro para resolver tus dudas.(Funcion Inactiva)"><h2>Foro</h2>
                            <p></p>
                    </div>
                </div>
                <div class="w3-row-padding w3-container">
                    <div id="op4" class="w3-col s5 m5 l5 w3-margin w3-mobile w3-container w3-hover-opacity"  onmousedown="clickButton('op4')" onmouseup="upButton('op4')" onmouseover="overButton('op4')" onmouseleave="leaveButton('op4')" onclick="window.location='{{ route('tools') }}'" title="Presiona aqui para acceder a los ajustes personalizados de la plataforma."><h2>Ajustes</h2>
                    </div>
                    <div id="op5" class="w3-col s5 m5 l5 w3-margin w3-mobile w3-container w3-hover-opacity"  onmousedown="clickButton('op5')" onmouseup="upButton('op5')" onmouseover="overButton('op5')" onmouseleave="leaveButton('op5')" title="Presiona aqui para visualizar tu informacion respecto a los cursos." onclick="window.location='{{ route('perfil') }}'"><h2>Perfil</h2>
                    <p></p>
                    </div>
                </div>
            </div>
        </div>
    </article>

@endsection