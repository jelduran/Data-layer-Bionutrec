<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperativosController;
use App\Http\Controllers\ConsumidoresController;
use App\Http\Controllers\DependientesController;
use App\Http\Controllers\MedicosController;
use App\Http\Controllers\RepresentantesController;
use App\Http\Controllers\TransferencistasController;
use App\Http\Controllers\InstitucionesController;
use App\Http\Controllers\FarmaciasController;
use Illuminate\Support\Facades\DB;

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

Route::get('/dashboard', function () {
  $visitas_dependientes =  DB::table('visitas_dependiente')
  ->join('transferencistas','transferencista','=','transferencistas.id')
  ->join('dependientes','dependiente','=','dependientes.id')
  ->selectraw(
    "transferencistas.id as id,
    CONCAT(transferencistas.nombres,' ',transferencistas.apellidos) as transferencista,
    COUNT(*) as visitas")
  ->groupBy('id')->pluck('visitas','transferencista');

  $visitas_medicos =  DB::table('visitas_medico')
  ->join('representantes','representante','=','representantes.id')
  ->join('medicos','medico','=','medicos.id')
  ->selectraw(
    "representantes.id as id,
    CONCAT(representantes.nombres,' ',representantes.apellidos) as representante,
    COUNT(*) as visitas")
  ->groupBy('id')->pluck('visitas','representante');

  $medicos_departamento =  DB::table('medicos')
  ->selectraw("
    departamento,
    COUNT(*) as medicos")
  ->groupBy('departamento')->pluck('medicos','departamento');

  $labels_transfer = $visitas_dependientes->keys();
  $data_transfer = $visitas_dependientes->values();

  $labels_rep = $visitas_medicos->keys();
  $data_rep = $visitas_medicos->values();

  $labels_med = $medicos_departamento->keys();
  $data_med = $medicos_departamento->values();

    return view('dashboard', compact('labels_transfer','data_transfer','labels_rep','data_rep','labels_med','data_med'));
})->middleware(['auth'])->name('dashboard');

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

Route::get('/template', function () {
    return view('template');
})->middleware(['auth'])->name('template');

Route::group(['middleware' => ['auth']], function() {
  Route::resource('roles', RoleController::class);
  Route::resource('users', UserController::class);
  Route::resource('consumidores', ConsumidoresController::class);
});

require __DIR__.'/auth.php';

Route::resource("/operativos", OperativosController::class);
Route::resource("/consumidores", ConsumidoresController::class);
Route::resource("/dependientes", DependientesController::class);
Route::resource("/medicos", MedicosController::class);
Route::resource("/representantes", RepresentantesController::class);
Route::resource("/transferencistas", TransferencistasController::class);
Route::resource("/instituciones", InstitucionesController::class);
Route::resource("/farmacias", FarmaciasController::class);

Route::get('/visitas_medicos', [RepresentantesController::class, 'index_visitas_medicos']);
Route::get('/visitas_dependientes', [TransferencistasController::class, 'index_visitas_dependientes']);
