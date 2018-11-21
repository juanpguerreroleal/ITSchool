@extends('layouts.Courses.html')

@section('title','Lesson 2-2')
	
@section('content2')
	<h1>Leccion 2-2 Estructura de las etiquetas.</h1>
	   <div class="row justify-content-center">
        	<div class="col-md-12">
            	<div class="card" >
                	<div id="header" class="card-header"><h4>Lectura</h4></div>
                	<div id="lectura" class="card-body collapse">
                	<iframe src = "{{ url('pdf/html/Lesson2-2.pdf') }}" style="width:100%; height:1000px;"></iframe>
                	</div>
            	</div>
            </div>
        </div>
@endsection