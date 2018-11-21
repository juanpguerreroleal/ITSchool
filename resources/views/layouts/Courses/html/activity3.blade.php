@extends('layouts.Courses.html')

@section('title','Activity 3')
	
@section('content2')
	<script type="text/javascript">
		var points = 0;
		var controller=0;
		function allowDrop(ev) {
    		ev.preventDefault();
		}

		function drag(ev) {
    		ev.dataTransfer.setData("text", ev.target.id);
		}

		function drop(ev, ex) {
			if(controller==0){
    			ev.preventDefault();
    			var data = ev.dataTransfer.getData("text");
    			ev.target.appendChild(document.getElementById(data));
    			if (ex == 1) {
    				if (data == 'drag3') {
    					document.getElementById('square').style.visibility="visible";
    					document.getElementById('square').style['background-color']="#64f064";
    					document.getElementById('squarep').innerHTML="Correcto";
    					di.cont= di.cont+1;
    				}
                    else{
                        document.getElementById('square').style.visibility="visible";
                        document.getElementById('square').style['background-color']="#f06464";
                        document.getElementById('squarep').innerHTML="Incorrecto";
                    }
    			}
    			if (ex == 2) {
    				if (data == 'drag3') {
    					document.getElementById('square').style.visibility="visible";
    					document.getElementById('square').style['background-color']="#64f064";
    					document.getElementById('squarep').innerHTML="Correcto";
    					controller++;
    					di.cont= di.cont+1;
    				}
                    else{
                        document.getElementById('square').style.visibility="visible";
                        document.getElementById('square').style['background-color']="#f06464";
                        document.getElementById('squarep').innerHTML="Incorrecto";
                    }
    			}
    		}
    		else{
    			    document.getElementById('square').style.visibility="visible";
    				document.getElementById('squarep').innerHTML="Ya escogiste la respuesta correcta anteriormente.";
    		}

		}
		function cerrar(){
			document.getElementById('square').style.visibility="hidden";
		}
	</script>
	<style type="text/css">
		#div1, #div2{
			width: 50%;
		}
		#drag1, #drag2, #drag3{
			width: 100%;
		}
		#drop1{
			width: 100%;
		}
		#square{
			visibility: hidden;
			border-color: black;
			border-style: solid;
			background-color: white;
			position: fixed;
			width: 200px;
			height: 200px;
			padding-top: 20px;			
			top: 40%;
			left: 50%;
		}
		#exit{
			height: 50px;
			width: 80px;
			color: black;

		}

	</style>
	<div id="di">
		<div id="square">
        	<p id="squarep"></p>        				
        	<button id="exit" onclick="cerrar()" value="Exit">Cerrar</button>
    	</div>
	<h1>Actividad 3 Etiquetas</h1>
	<?php $state = Auth::user()->activity3 ?>
	<h1>Estado de actividad: 
		@if($state==1)
			Completada 
		@else 
			Incompleta
		@endif
		</h1>

			<template v-if="cont == 0">
				<h2>Ejercicio 1.</h2>
				<p>Arrastra la estructura correcta hacia la figura del lado derecho</p>
                <h4>¿Que codigo da como resultado la figura del lado derecho?</h4>
        		<div class="w3-row-padding w3-container">
        			<div id="div1" class="w3-col s12 m5 l5 w3-mobile w3-border" ondrop="drop(event,1)" ondragover="allowDrop(event)">
        				<img id="drag1" class="w3-border" src="{{ asset('img/HTML/Actividad 3/Ejercicio 1/img1.png') }}" draggable="true" ondragstart="drag(event)">
        				<img id="drag2" class="w3-border" src="{{ asset('img/HTML/Actividad 3/Ejercicio 1/img2.png') }}" draggable="true" ondragstart="drag(event)">
        				<img id="drag3" class="w3-border" src="{{ asset('img/HTML/Actividad 3/Ejercicio 1/img3.png') }}" draggable="true" ondragstart="drag(event)">
        			</div>        				
        			<div id="div2" class="w3-col s12 m5 l5 w3-mobile w3-border">
        				<img id="drop1" class="w3-border" src="{{ asset('img/HTML/Actividad 3/Ejercicio 1/visualizacion1.png') }}" ondrop="drop(event,1)" ondragover="allowDrop(event)">
        			</div>
        		</div>
        	</template>

        	<template v-if="cont == 1">
				<h2>Ejercicio 2.</h2>
				<p>Arrastra la visualizacion correcta hacia la figura del lado derecho.</p>
                <h4></h4>
        		<div class="w3-row-padding w3-container">
        			<div id="div1" class="w3-col s12 m5 l5 w3-mobile w3-border" ondrop="drop(event,2)" ondragover="allowDrop(event)">
        				<img id="drag1" class="w3-border" src="{{ asset('img/HTML/Actividad 3/Ejercicio 2/img1.png') }}" draggable="true" ondragstart="drag(event)">
        				<img id="drag2" class="w3-border" src="{{ asset('img/HTML/Actividad 3/Ejercicio 2/img2.png') }}" draggable="true" ondragstart="drag(event)">
        				<img id="drag3" class="w3-border" src="{{ asset('img/HTML/Actividad 3/Ejercicio 2/img3.png') }}" draggable="true" ondragstart="drag(event)">
        			</div>        				
        			<div id="div2" class="w3-col s12 m5 l5 w3-mobile w3-border">
        				<img id="drop1" class="w3-border" src="{{ asset('img/HTML/Actividad 3/Ejercicio 2/visualizacion1.png') }}" ondrop="drop(event,2)" ondragover="allowDrop(event)">
        			</div>
        		</div>
        	</template>

            <template v-if="cont == 2">
            	<h1>Muy bien, contestaste correctamente, ahora finalicemos con un ultimo ejercicio!</h1>
        		<h2>Ejercicio 3.</h2>
        		<p>Contesta la siguiente serie de preguntas</p>
        	    	<form method="POST" action="{{ url('/Cursos/html/activity3') }}" class="questionForm" id="q1" data-question="1">
        	    		{!! csrf_field() !!}
        	    	    <h3>¿Para que sirve la etiqueta canvas?</h3>
        	    	    <ul type="none">
        	    	        <li><input id="id1" type="radio" name="p1" value="{{ $p1=1 }}"><label for="id1">Para dibujar graficos en el HTML mediante scripts</label></li>
        	            	<li><input id="id2" type="radio" name="p1" value="{{ $p1=2 }}"><label for="id2">Para ejecutar codigo Javascript</label></li>
        	            	<li><input id="id3" type="radio" name="p1" value="{{ $p1=3 }}"><label for="id3">Para insertar imagenes</label></li>
        	            	<li><input id="id4" type="radio" name="p1" value="{{ $p1=4 }}"><label for="id4">Todos los anteriores.</label></li>
            	    	</ul>
            	    	<h3>Etiqueta que define contenido a un lado del contenido donde se encuentra. Es basicamente la estructura secundaria de la informacion.</h3>
            	    	<ul type="none">
        	    	        <li><input id="id5" type="radio" name="p2" value="{{ $p2=1 }}"><label for="id5">Etiqueta aside</label></li>
        	            	<li><input id="id6" type="radio" name="p2" value="{{ $p2=2 }}"><label for="id6">Etiqueta header</label></li>
        	            	<li><input id="id7" type="radio" name="p2" value="{{ $p2=3 }}"><label for="id7">Etiqueta footer</label></li>
        	            	<li><input id="id8" type="radio" name="p2" value="{{ $p2=4 }}"><label for="id8">Etiqueta article</label></li>
            	    	</ul>
                        <h3>Etiqueta que nos sirve para anexar documentos a nuestro HTML</h3>
                        <ul type="none">
                            <li><input id="id9" type="radio" name="p3" value="{{ $p3=1 }}"><label for="id9">Etiqueta source</label></li>
                            <li><input id="id10" type="radio" name="p3" value="{{ $p3=2 }}"><label for="id10">Etiqueta meta</label></li>
                            <li><input id="id11" type="radio" name="p3" value="{{ $p3=3 }}"><label for="id11">Etiqueta iframe</label></li>
                            <li><input id="id12" type="radio" name="p3" value="{{ $p3=4 }}"><label for="id12">Etiqueta footer</label></li>
                        </ul>
            	    	<button type="submit">Enviar</button>
            		</form>
            </template>
        			<script type="text/javascript">
						var di = new Vue({
						el: '#di',
						data: {
							cont: 0,
						}
						});
					</script>
	</div>


@endsection