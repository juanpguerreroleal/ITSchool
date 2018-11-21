<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/main', function () {
    return view('mainlog');
})->name('mainlog');

Auth::routes();

//Menu principal
Route::get('/', 'HomeController@index')->name('main');
Route::get('/Cursos', 'HomeController@courses')->name('courses');
Route::get('/About', 'HomeController@about')->name('about');
Route::get('/Tools', 'HomeController@tools')->name('tools');
Route::get('/Perfil', 'HomeController@perfil')->name('perfil');
Route::get('/Updates', 'HomeController@updates')->name('updates');

//Cursos
Route::get('/Cursos/html','HomeController@courseHTML')->name('html');
Route::get('/Cursos/css','HomeController@courseCSS')->name('css');

//Curso HTML

//Menu secundario
Route::get('/login', function (){
	return view('auth/login');
})->name('login');
Route::get('/register', function (){
	return view('auth/register');
})->name('register');

//Lecciones y actividades proximamente en sus controladores por curso

	Route::get('/Cursos/html/lesson1-1',function (){
		return view('layouts/Courses/html/lesson1-1');
	})->name('lesson1-1');
	Route::get('/Cursos/html/lesson1-2',function (){
		return view('layouts/Courses/html/lesson1-2');
	})->name('lesson1-2');
	Route::get('/Cursos/html/lesson1-3',function (){
		return view('layouts/Courses/html/lesson1-3');
	})->name('lesson1-3');
		Route::get('/Cursos/html/activity1',function (){
		return view('layouts/Courses/html/activity1');
	})->name('activity1');

	Route::get('/Cursos/html/lesson2-1',function (){
		return view('layouts/Courses/html/lesson2-1');
	})->name('lesson2-1');
	Route::get('/Cursos/html/lesson2-2',function (){
		return view('layouts/Courses/html/lesson2-2');
	})->name('lesson2-2');
	Route::get('/Cursos/html/lesson2-3',function (){
		return view('layouts/Courses/html/lesson2-3');
	})->name('lesson2-3');
	Route::get('/Cursos/html/activity2',function (){
		return view('layouts/Courses/html/activity2');
	})->name('activity2');	

	Route::get('/Cursos/html/lesson3-1',function (){
		return view('layouts/Courses/html/lesson3-1');
	})->name('lesson3-1');
	Route::get('/Cursos/html/lesson3-2',function (){
		return view('layouts/Courses/html/lesson3-2');
	})->name('lesson3-2');
	Route::get('/Cursos/html/lesson3-3',function (){
		return view('layouts/Courses/html/lesson3-3');
	})->name('lesson3-3');
	Route::get('/Cursos/html/activity3',function (){
		return view('layouts/Courses/html/activity3');
	})->name('activity3');	

	Route::get('/Cursos/html/cierre',function (){
		return view('layouts/Courses/html/cierre');
	})->name('cierre');	
	Route::get('/Cursos/html/atributos',function (){
		return view('layouts/Courses/html/atributos');
	})->name('atributos');	


//Acciones de POST
Auth::routes();
Route::post('/Tools', 'temaController@cambiar');
Route::post('/Cursos/html/activity1', 'actividadeshtmlController@actividad1');
Route::post('/Cursos/html/activity2', 'actividadeshtmlController@actividad2');
Route::post('/Cursos/html/activity3', 'actividadeshtmlController@actividad3');