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

	/*public function store(Request) {

    	$persona = Persona::create($request -> all());
	}*/
}
