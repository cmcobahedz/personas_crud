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

    	$persona = Persona::findOrFail($id);
    	$personas = Persona::all();

    	return view('/personas/personas_edit')
    				->with('persona',$persona)
    				->with('personas',$personas)
    				->with('id',$id);
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

        return redirect('/personas');
	}

	public function update(Request $request,$id){

			
    	$persona = Persona::findOrFail($id);
    	$persona -> name = $request -> name;
    	$persona -> last_name = $request -> last_name;
    	$persona -> age = $request -> age;
    	$persona -> gender = $request -> gender;
    	$persona -> direction = $request -> direction;
    	$persona -> postal_code = $request -> postal_code;
    	$persona -> update();

    	return redirect('/personas');
	}

	public function delete(Request $request) {

		$persona = Persona::find($request -> id);
		$persona -> delete();

		return redirect('/personas');
	}
}
