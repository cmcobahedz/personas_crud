<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
//use App\Models\Persona;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('personas', [PersonaController:: class, 'index']);
Route::get('personas/{id}', [PersonaController:: class, 'show']);
Route::post('personas', [PersonaController:: class, 'store']);
