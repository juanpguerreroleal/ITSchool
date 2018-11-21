@extends('layouts.Courses.html')

@section('title','Lesson 2-1')
	
@section('content2')
	<h1>Leccion 2-1 Estructura base y sus etiquetas.</h1>
	   <div class="row justify-content-center">
        	<div class="col-md-12">
            	<div class="card" >
                	<div id="header" class="card-header"><h4>Lectura</h4></div>
                	<div id="lectura" class="card-body collapse">
                	<iframe src = "{{ url('pdf/html/lesson2-1.pdf') }}" style="width:100%; height:1000px;"></iframe>
                	</div>
            	</div>
            </div>
        </div>
        <template v-if="extra==false">
            <button class="w3-button w3-black" v-on:click="extra=true">Ver mas</button>
        </template>
        <hr>
        <template v-if="extra==true">
            <template v-if="extra==true">
                <button class="w3-button w3-gray" v-on:click="extra=false">Ver menos</button>
            </template>
            <hr>
            <iframe src = "{{ url('pdf/html/lesson2-1-1.pdf') }}" style="width: 100%; height: 1000px;"></iframe>
        </template>
        <script type="text/javascript">
            const extra = new Vue({
                el: '#contenido',
                data: {
                    extra: false,
                }
            });
        </script>

@endsection