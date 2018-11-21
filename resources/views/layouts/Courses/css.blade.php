@extends('layouts.base')

@section('title','CSS')

@section('content')
			<article class="w3-container w3-center w3-animate-top w3-row-padding">
				<section class="w3-container w3-col s12 m3 l3">
					<header id="titulo">
						<h1>CSS</h1>
					</header>
					<nav id ="navegacionCurso" class="w3-bar-block w3-white">
							<button onclick="expandir('t1')" class="w3-hover-gray w3-button w3-block w3-left-align">1. Introduccion</button>
							<div id="t1" class="w3-hide w3-container">
								<a href="" class="w3-bar-item w3-hover-gray w3-button">1.1 ¿Que es CSS? </a>
								<a href="" class="w3-bar-item w3-hover-gray w3-button">1.2 Navegadores </a>
								<a href="" class="w3-bar-item w3-hover-gray w3-button">1.3 Paginas que utilizan CSS </a>
								<a href="" class="w3-bar-item w3-hover-gray w3-button">Actividad 1</a>
							</div>
					</nav>
				</section>
				<section id="contenido" class="w3-container w3-center w3-col s12 m9 l9">
							@yield('content2')
				</section>

@endsection