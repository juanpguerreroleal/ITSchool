<?php

namespace ITSchool\Http\Controllers;

use Illuminate\Http\Request;
use ITSchool\Usuario;
use Illuminate\Support\Facades\Auth;

class actividadeshtmlController extends Controller
{
    function actividad1(Request $request){
    	$p1 = $request->input('p1');
    	if($p1 == 4){
    		$rev = "correcto";
            $user = Usuario::find(Auth::user()->id);
            $user->activity1 = 1;
            $user->save();
    	}
    	else{
    		$rev = "incorrecto";
    	}
    	return view('layouts/Courses/html/activity1');
    }
    function actividad2(Request $request){
        $p1 = $request->input('p1');
        $p2 = $request->input('p2');
        $p3 = $request->input('p3');
        if($p1 == 4 && $p2 == 3 && $p3 == 4 ){
            $rev = "correcto";
            $user = Usuario::find(Auth::user()->id);
            $user->activity2 = 1;
            $user->save();
        }
        else{
            $rev = "incorrecto";
        }
        return view('layouts/Courses/html/activity2');
    }
    function actividad3(Request $request){
        $p1 = $request->input('p1');
        $p2 = $request->input('p2');
        $p3 = $request->input('p3');
        if($p1 == 1 && $p2 == 1 && $p3 == 3 ){
            $rev = "correcto";
            $user = Usuario::find(Auth::user()->id);
            $user->activity3 = 1;
            $user->save();
        }
        else{
            $rev = "incorrecto";
        }
        return view('layouts/Courses/html/activity3');
    }
}