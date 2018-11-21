@extends('layouts.base')

@section('title','Cursos')

@section('content')
	<article class="w3-container w3-center w3-animate-top">			
		<div id="texto" class="w3-container">
			<h1>Cursos</h1>
		</div>
		<div id="cont2" class="w3- center w3-container">
			<div class="w3-row-padding w3-col s12 m12 l12 w3-container w3-center">
					<div id="contenedor1" class="w3-col s12 m5 l5 w3-mobile w3-margin w3-container w3-hover-opacity"  onmouseover="overButton('contenedor1')" onmouseleave="leaveButton('contenedor1')" title="Presiona para continuar al curso de HTML"  onclick="window.location='{{ route('html') }}'">
						<h1>HTML</h1>
					</div>
				<div id="contenedor2" class="w3-col s12 m5 l5 w3-mobile w3-margin w3-container w3-hover-opacity"  onmouseover="overButton('contenedor2')" onmouseleave="leaveButton('contenedor2')"  title="Presiona para continuar al curso de CSS" onclick="window.location='{{ route('css') }}'">
					<h1>CSS</h1>
				</div>
			</div>
<!--			<div class="w3-row-padding w3-container">
				<div id="contenedor3" class="w3-container w3-col s12 m5 l5 w3-margin w3-mobile w3-hover-opacity"  onmouseover="overButton('contenedor3')" onmouseleave="leaveButton('contenedor3')"  title="Presiona para continuar al curso de Microsoft Excel"  onclick="clickButton('contenedor3')">
					<h1>MS. Excel</h1>
				</div>
			</div>
-->
		</div>
	</article>
@endsection