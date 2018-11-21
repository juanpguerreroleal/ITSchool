<?php

namespace ITSchool\Http\Controllers;

use Illuminate\Http\Request;
use ITSchool\Usuario;
use Illuminate\Support\Facades\Auth;

class temaController extends Controller
{
    public function cambiar(Request $request){
    	$tema = $request->input('theme');
    	$user = Usuario::find(Auth::user()->id);
    	$user->theme = $tema;
    	$user->save();
    	return view('layouts/Main/tools');
    }
}
