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

Route::get('', 'App\Http\Controllers\HomeController@index');

Route::get('fichas', 'App\Http\Controllers\FichaController@index');
Route::get('fichas/new', 'App\Http\Controllers\FichaController@new');
Route::get('fichas/create', 'App\Http\Controllers\FichaController@create');
Route::get('fichas/detail/{id}', 'App\Http\Controllers\FichaController@detail');
Route::get('fichas/edit/{id}', 'App\Http\Controllers\FichaController@update')->name('fichas.update');


Route::get('anamnesis/new/{id}', 'App\Http\Controllers\AnamnesisController@new');
Route::get('anamnesis/detail/{id}', 'App\Http\Controllers\AnamnesisController@detail');
Route::get('anamnesis/delete/{id}', 'App\Http\Controllers\AnamnesisController@delete')->name('anamnesis.delete');
Route::get('anamnesis/edit/{id}', 'App\Http\Controllers\AnamnesisController@update')->name('anamnesis.update');
Route::get('anamnesis/create', 'App\Http\Controllers\AnamnesisController@create');


Route::get('anamnesis_odontologica/new/{id}', 'App\Http\Controllers\AnamnesisOdontologicaController@new');
Route::get('anamnesis_odontologica/detail/{id}', 'App\Http\Controllers\AnamnesisOdontologicaController@detail');
Route::get('anamnesis_odontologica/delete/{id}', 'App\Http\Controllers\AnamnesisOdontologicaController@delete')->name('anamnesis_odontologica.delete');
Route::get('anamnesis_odontologica/edit/{id}', 'App\Http\Controllers\AnamnesisOdontologicaController@update')->name('anamnesis_odontologica.update');
Route::get('anamnesis_odontologica/create', 'App\Http\Controllers\AnamnesisOdontologicaController@create');

Route::get('odontograma/detail/{id}', 'App\Http\Controllers\OdontogramaController@detail');
Route::get('odontograma/edit/{id}', 'App\Http\Controllers\OdontogramaController@update')->name('odontograma.update');

Route::get('agenda', 'App\Http\Controllers\AgendaController@index');
Route::get('agenda/create', 'App\Http\Controllers\AgendaController@create');
Route::get('agenda/delete/{id}', 'App\Http\Controllers\AgendaController@delete')->name('agenda.delete');

Route::get('evaluacion_clinica/new/{id}', 'App\Http\Controllers\EvaluacionClinicaController@new');
Route::get('evaluacion_clinica/detail/{id}', 'App\Http\Controllers\EvaluacionClinicaController@detail');
Route::get('evaluacion_clinica/delete/{id}', 'App\Http\Controllers\EvaluacionClinicaController@delete')->name('evaluacion_clinica.delete');
Route::get('evaluacion_clinica/edit/{id}', 'App\Http\Controllers\EvaluacionClinicaController@update')->name('evaluacion_clinica.update');
Route::get('evaluacion_clinica/create', 'App\Http\Controllers\EvaluacionClinicaController@create');

Route::get('radiografia/new/{id}', 'App\Http\Controllers\RadiografiaController@new');
Route::post('radiografia/create', 'App\Http\Controllers\RadiografiaController@create');
Route::get('radiografia/download/{file}', 'App\Http\Controllers\RadiografiaController@descargarArchivo');

Route::get('foto_clinica/new/{id}', 'App\Http\Controllers\FotografiasClinicaController@new');
Route::post('foto_clinica/create', 'App\Http\Controllers\FotografiasClinicaController@create');
Route::get('foto_clinica/download/{file}', 'App\Http\Controllers\FotografiasClinicaController@descargarArchivo');

Route::get('inventario', 'App\Http\Controllers\ImplementoController@index');
Route::get('inventario/create', 'App\Http\Controllers\ImplementoController@create');
Route::get('inventario/stock/{id}', 'App\Http\Controllers\ImplementoController@stock')->name('inventario.stock');
Route::get('inventario/edit/{id}', 'App\Http\Controllers\ImplementoController@update')->name('inventario.update');

Route::get('pacientes', 'App\Http\Controllers\PacienteController@index');