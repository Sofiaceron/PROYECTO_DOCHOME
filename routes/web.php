<?php
use Illuminate\Support\Facades\Route;

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

  Route::get('/', function () {
    return view('pagina_principal.index');
});  

//RUTAS ADMIN
Route::view('Perfiladmin', 'Perfiladmin.perfil')->name("Perfiladmin");

Route::view('Medicos', 'Medicos.vistadoc')->name("Medicos");

Route::view('Pacientes', 'Pacientes.vistapaci')->name("Pacientes");

//RUTAS MEDICO
Route::view('Registrodoc', 'Registrodoc.registro')->name("Registrodoc");

Route::view('Perfildoc', 'Perfildoc.perfil')->name("Perfildoc");

Route::view('Agenda', 'Agenda.agenda')->name("Agenda");

Route::view('Historialdoc', 'Historialdoc.historial')->name("Historialdoc");



//RUTAS PACIENTE
Route::view('Registropaci', 'Registropaci.registro')->name("Registropaci");

Route::view('Perfilpaci', 'Perfilpaci.perfil')->name("Perfilpaci");

Route::view('Cita', 'Cita.citas')->name("Cita");

Route::view('Historialpaci', 'Historialpaci.historial')->name("Historialpaci");

//RUTA LOGIN

Route::view('Login1', 'Login1.login')->name("Login1");

Route::view('Login2', 'Login2.login')->name("Login2");

Route::view('Login3', 'Login3.login')->name("Login3");

