@extends('layouts.Courses.html')

@section('title','Lesson1-Prueba')
	
@section('content2')
	<h1>Leccion 0.1 Prueba</h1>
	   <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" >
                <div id="header" class="card-header"><h4>Lectura</h4></div>
                <div id="lectura" class="card-body collapse">
                <iframe src = "{{ url('pdf/html/html.pdf') }}" style="width:100%; height:1000px;"></iframe>
                 </div>
            </div>
            <div class="card">
                <div id="header" class="card-header"><h4>Quiz</h4></div>
                <div  id="quiz" class="card-body collapse">
       				<header>
            		<div class="pull-left">HTML5 Quiz</div>
            		<div class="pull-right">ITSchool</div>
        			</header>
        		<main>
            		<form class="questionForm" id="q1" data-question="1">
                		<h3>1. Which tag should be used to represent the "header" of a document?</h3>
                		<ul>
                    		<li><input type="radio" name="q1" value="a" />&lt;head&gt;</li>
                    		<li><input type="radio" name="q1" value="b" />&lt;header&gt;</li>
                    		<li><input type="radio" name="q1" value="c" />&lt;heading&gt;</li>
                    		<li><input type="radio" name="q1" value="d" />&lt;main&gt;</li>
                		</ul>
                		<button id="submit">Submit</button>
            		</form>
            
            		<form class="questionForm" id="q2" data-question="2">
                		<h3>2. Which of the following is NOT a new feature of HTML5?</h3>
                		<ul>
                    		<li><input type="radio" name="q2" value="a" />New Media Elements</li>
                    		<li><input type="radio" name="q2" value="b" />Form Input Types</li>
                    		<li><input type="radio" name="q2" value="c" />Local Storage</li>
                    		<li><input type="radio" name="q2" value="d" />Cookies</li>
                		</ul>
                		<button id="submit">Submit</button>
            		</form>
            
            		<form class="questionForm" id="q3" data-question="3">
                		<h3>3. Which element is the most appropriate to wrap around each blog post on a page??</h3>
                		<ul>
                    		<li><input name="q3" type="radio" value="a" />&lt;section&gt;</li>
                    		<li><input name="q3" type="radio" value="b" />&lt;post&gt;</li>
                    		<li><input name="q3" type="radio" value="c" />&lt;article&gt;</li>
                    		<li><input name="q3" type="radio" value="d" />&lt;main&gt;</li>
                		</ul>
                		<button id="submit">Submit</button>
            		</form>
            
            		<form class="questionForm" id="q4" data-question="4">
                		<h3>4. Which HTML5 tag is used for sidebar content?</h3>
                		<ul>
                    		<li><input name="q4" type="radio" value="a" />&lt;aside&gt;</li>
                    		<li><input name="q4" type="radio" value="b" />&lt;sidebar&gt;</li>
                    		<li><input name="q4" type="radio" value="c" />&lt;sub&gt;</li>
                    		<li><input name="q4" type="radio" value="d" />&lt;side&gt;</li>
                		</ul>
                		<button id="submit">Submit</button>
            		</form>
            
            		<form class="questionForm" id="q5" data-question="5">
                		<h3>5. Using canvas, which is used to color in a rectangle?</h3>
                		<ul>
                    		<li><input name="q5" type="radio" value="a" />strokeStyle</li>
                    		<li><input name="q5" type="radio" value="b" />fillRect</li>
                    		<li><input name="q5" type="radio" value="c" />strokeFill</li>
                    		<li><input name="q5" type="radio" value="d" />rectFill</li>
                		</ul>
                		<button id="submit">Submit</button>
            		</form>

            </div>
        </div>
    </div>
@endsection