<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    //
    public function index() {

    	$personas = Persona::all();

    	return view('/personas/personas')
    				->with('personas',$personas);
	}

	public function show($id) {

    	return Persona::find($id);
	}

	public function store(Request $request) {

    	$persona = new Persona;
        $persona -> name = $request -> name;
        $persona -> last_name = $request -> last_name;
        $persona -> age = $request -> age;
        $persona -> gender = $request -> gender;
        $persona -> direction = $request -> direction;
        $persona -> postal_code = $request -> postal_code;
        $persona -> save();

        
	}
}
