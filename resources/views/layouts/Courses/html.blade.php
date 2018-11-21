@extends('layouts.base')

@section('title','HTML')

@section('content')
			<article class="w3-container w3-center w3-animate-top w3-row-padding">
				<section class="w3-container w3-col s12 m3 l3">
					<header id="titulo">
						<h1>HTML</h1>
					</header>
					<nav id ="navegacionCurso" class="w3-bar-block w3-white">
							<button onclick="expandir('t1')" class="w3-hover-gray w3-button w3-block w3-left-align">1. Introduccion</button>
							<div id="t1" class="w3-hide w3-container">
								<a href="{{ route('lesson1-1') }}" class="w3-bar-item w3-hover-gray w3-button">1.1 ¿Que es HTML? </a>
								<a href="{{ route('lesson1-2') }}" class="w3-bar-item w3-hover-gray w3-button">1.2 Navegadores </a>
								<a href="{{ route('lesson1-3') }}" class="w3-bar-item w3-hover-gray w3-button">1.3 Paginas que utilizan HTML5 </a>
								<a href="{{ route('activity1') }}" class="w3-bar-item w3-hover-gray w3-button">Actividad 1</a>
							</div>
							<button onclick="expandir('t2')" class="w3-hover-gray w3-button w3-block w3-left-align">2. Estructura</button>
							<div id="t2" class="w3-hide w3-container">
								<a href="{{ route('lesson2-1') }}" class="w3-bar-item w3-hover-gray w3-button">2.1 Estructura base HTML</a>
								<a href="{{ route('lesson2-2') }}" class="w3-bar-item w3-hover-gray w3-button">2.2 Estructura de las Etiquetas</a>
								<a href="{{ route('lesson2-3') }}" class="w3-bar-item w3-hover-gray w3-button">2.3 Etiquetas basicas</a>
								<a href="{{ route('activity2')}}" class="w3-bar-item w3-hover-gray w3-button">Actividad 2</a>
							</div>
							<button onclick="expandir('t3')" class="w3-hover-gray w3-button w3-block w3-left-align">3. Etiquetas</button>
							<div id="t3" class="w3-hide w3-container">
								<a href="{{ route('lesson3-1') }}" class="w3-bar-item w3-hover-gray w3-button">3.1 Etiquetas de contenido</a>
								<a href="{{ route('lesson3-2') }}" class="w3-bar-item w3-hover-gray w3-button">3.2 Etiqueta script y canvas</a>
								<a href="{{ route('lesson3-3') }}" class="w3-bar-item w3-hover-gray w3-button">3.3 Etiquetas para contenido multimedia</a>
								<a href="{{ route('activity3') }}" class="w3-bar-item w3-hover-gray w3-button">Actividad 3</a>
							</div>
							<button onclick="expandir('t4')" class="w3-hover-gray w3-button w3-block w3-left-align">4. Cierre del curso</button>
							<div id="t4" class="w3-hide w3-container">
								<a href="{{ route('cierre') }}" class="w3-bar-item w3-hover-gray w3-button">4.1 Fin de curso</a>
							</div>
							<button onclick="expandir('t5')" class="w3-hover-gray w3-button w3-block w3-left-align">Contenido extra</button>
							<div id="t5" class="w3-hide w3-container">
								<a href="{{ route('atributos') }}" class="w3-bar-item w3-hover-gray w3-button">Atributos</a>
							</div>
					</nav>
				</section>
				<section id="contenido" class="w3-container w3-center w3-col s12 m9 l9">
							@yield('content2')
				</section>

@endsection