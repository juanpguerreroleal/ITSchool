@extends('layouts.Courses.html')

@section('title','Activity 1')
	
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

		function drop(ev) {
			if(controller==0){
    			ev.preventDefault();
    			var data = ev.dataTransfer.getData("text");
    			ev.target.appendChild(document.getElementById(data));
    			if (data == 'drag1') {
    				document.getElementById('square').style.visibility="visible";
    				document.getElementById('square').style['background-color']="#64f064";
    				document.getElementById('squarep').innerHTML="Correcto";
    				controller++;
    				di.cont=1;
    				
    			}
    			else{
    				document.getElementById('square').style.visibility="visible";
    				document.getElementById('square').style['background-color']="#f06464";
    				document.getElementById('squarep').innerHTML="Incorrecto";
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
	<h1>Actividad 1 Introduccion</h1>
	<?php $state = Auth::user()->activity1 ?>
	<h1>Estado de actividad: 
		@if($state==1)
			Completada 
		@else 
			Incompleta
		@endif
		</h1>
		<h2>Ejercicio 1.</h2>
			<p>Arrastra el codigo correcto para la visualizacion que se encuentra del lado derecho y colocalo encima de esta.</p>
        		<div class="w3-row-padding w3-container">
        			<div id="div1" class="w3-col s12 m5 l5 w3-mobile w3-border" ondrop="drop(event)" ondragover="allowDrop(event)">
        				<img id="drag1" class="w3-border" src="{{ asset('img/HTML/Actividad1/codigo1.png') }}" draggable="true" ondragstart="drag(event)">
        				<img id="drag2" class="w3-border" src="{{ asset('img/HTML/Actividad1/codigo2.png') }}" draggable="true" ondragstart="drag(event)">
        				<img id="drag3" class="w3-border" src="{{ asset('img/HTML/Actividad1/codigo3.png') }}" draggable="true" ondragstart="drag(event)">
        			</div>        				
        			<div id="div2" class="w3-col s12 m5 l5 w3-mobile w3-border">
        				<img id="drop1" class="w3-border" src="{{ asset('img/HTML/Actividad1/visualizacion1.png') }}" ondrop="drop(event)" ondragover="allowDrop(event)">
        			</div>
        		</div>
            <template v-if="cont == 1">
            	<h1>Muy bien, contestaste correctamente, ahora finalicemos con un ultimo ejercicio!</h1>
        		<h2>Ejercicio 2.</h2>
        		<p>Contesta la siguiente serie de preguntas</p>
        	    	<form method="POST" action="{{ url('/Cursos/html/activity1') }}" class="questionForm" id="q1" data-question="1">
        	    		{!! csrf_field() !!}
        	    	    <h3>¿Cual de las siguientes paginas NO utiliza HTML?</h3>
        	    	    <ul type="none">
        	    	        <li><input id="id1" type="radio" name="p1" value="{{ $p1=1 }}"><label for="id1">Facebook</label></li>
        	            	<li><input id="id2" type="radio" name="p1" value="{{ $p1=2 }}"><label for="id2">Twitter</label></li>
        	            	<li><input id="id3" type="radio" name="p1" value="{{ $p1=3 }}"><label for="id3">Instagram</label></li>
        	            	<li><input id="id4" type="radio" name="p1" value="{{ $p1=4 }}"><label for="id4">Ninguna, todas utilizan HTML</label></li>
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