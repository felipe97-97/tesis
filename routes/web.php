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
Auth::routes();

Route::get('fichas', 'App\Http\Controllers\FichaController@index')->name('fichas.index');
Route::get('fichas/new', 'App\Http\Controllers\FichaController@new')->name('fichas.new');
Route::get('fichas/create', 'App\Http\Controllers\FichaController@create')->name('fichas.create');
Route::get('fichas/detail/{id}', 'App\Http\Controllers\FichaController@detail')->name('fichas.detail');
Route::get('fichas/edit/{id}', 'App\Http\Controllers\FichaController@update')->name('fichas.update');


Route::get('anamnesis/new/{id}', 'App\Http\Controllers\AnamnesisController@new')->name('anamnesis.new');
Route::get('anamnesis/detail/{id}', 'App\Http\Controllers\AnamnesisController@detail')->name('anamnesis.detail');
Route::get('anamnesis/delete/{id}', 'App\Http\Controllers\AnamnesisController@delete')->name('anamnesis.delete');
Route::get('anamnesis/edit/{id}', 'App\Http\Controllers\AnamnesisController@update')->name('anamnesis.update');
Route::get('anamnesis/create', 'App\Http\Controllers\AnamnesisController@create')->name('anamnesis.create');


Route::get('anamnesis_odontologica/new/{id}', 'App\Http\Controllers\AnamnesisOdontologicaController@new')->name('anamnesis_odontologica.new');
Route::get('anamnesis_odontologica/detail/{id}', 'App\Http\Controllers\AnamnesisOdontologicaController@detail')->name('anamnesis_odontologica.detail');
Route::get('anamnesis_odontologica/delete/{id}', 'App\Http\Controllers\AnamnesisOdontologicaController@delete')->name('anamnesis_odontologica.delete');
Route::get('anamnesis_odontologica/edit/{id}', 'App\Http\Controllers\AnamnesisOdontologicaController@update')->name('anamnesis_odontologica.update');
Route::get('anamnesis_odontologica/create', 'App\Http\Controllers\AnamnesisOdontologicaController@create')->name('anamnesis_odontologica.create');

Route::get('odontograma/detail/{id}', 'App\Http\Controllers\OdontogramaController@detail')->name('odontograma.detail');
Route::get('odontograma/edit/{id}', 'App\Http\Controllers\OdontogramaController@update')->name('odontograma.update');

Route::get('agenda', 'App\Http\Controllers\AgendaController@index')->name('agenda.index');
Route::get('agenda/create', 'App\Http\Controllers\AgendaController@create')->name('agenda.create');
Route::get('agenda/delete/{id}', 'App\Http\Controllers\AgendaController@delete')->name('agenda.delete');

Route::get('evaluacion_clinica/new/{id}', 'App\Http\Controllers\EvaluacionClinicaController@new')->name('evaluacion_clinica.new');
Route::get('evaluacion_clinica/detail/{id}', 'App\Http\Controllers\EvaluacionClinicaController@detail')->name('evaluacion_clinica.detail');
Route::get('evaluacion_clinica/delete/{id}', 'App\Http\Controllers\EvaluacionClinicaController@delete')->name('evaluacion_clinica.delete');
Route::get('evaluacion_clinica/edit/{id}', 'App\Http\Controllers\EvaluacionClinicaController@update')->name('evaluacion_clinica.update');
Route::get('evaluacion_clinica/create', 'App\Http\Controllers\EvaluacionClinicaController@create')->name('evaluacion_clinica.create');

Route::get('radiografia/new/{id}', 'App\Http\Controllers\RadiografiaController@new')->name('radiografia.new');
Route::post('radiografia/create', 'App\Http\Controllers\RadiografiaController@create')->name('radiografia.create');
Route::get('radiografia/download/{file}', 'App\Http\Controllers\RadiografiaController@descargarArchivo')->name('radiografia.descargarArchivo');

Route::get('foto_clinica/new/{id}', 'App\Http\Controllers\FotografiasClinicaController@new')->name('foto_clinica.new');
Route::post('foto_clinica/create', 'App\Http\Controllers\FotografiasClinicaController@create')->name('foto_clinica.create');
Route::get('foto_clinica/download/{file}', 'App\Http\Controllers\FotografiasClinicaController@descargarArchivo')->name('foto_clinica.descargarArchivo');

Route::get('inventario', 'App\Http\Controllers\ImplementoController@index')->name('inventario.index');
Route::get('inventario/create', 'App\Http\Controllers\ImplementoController@create')->name('inventario.create');
Route::get('inventario/stock/{id}', 'App\Http\Controllers\ImplementoController@stock')->name('inventario.stock');
Route::get('inventario/edit/{id}', 'App\Http\Controllers\ImplementoController@update')->name('inventario.update');


Route::get('personal', 'App\Http\Controllers\PersonalController@index')->name('personal.index');
Route::get('personal/new', 'App\Http\Controllers\PersonalController@new')->name('personal.new');
Route::get('personal/create', 'App\Http\Controllers\PersonalController@create')->name('personal.create');
Route::get('personal/detail/{id}', 'App\Http\Controllers\PersonalController@detail')->name('personal.detail');
Route::get('personal/edit/{id}', 'App\Http\Controllers\PersonalController@update')->name('personal.update');

Route::get('pacientes', 'App\Http\Controllers\PacienteController@index')->name('pacientes.index');

Route::get('proveedores', 'App\Http\Controllers\ProveedorController@index')->name('proveedores.index');
Route::get('proveedores/create', 'App\Http\Controllers\ProveedorController@create')->name('proveedores.create');
Route::get('proveedores/edit/{id}', 'App\Http\Controllers\ProveedorController@update')->name('proveedores.update');

Route::get('/home', 'App\Http\Controllers\HomeController@home');
Route::get('/edit_password/{id}', 'App\Http\Controllers\HomeController@editPassword')->name('home.update_pass');
Route::get('/', 'App\Http\Controllers\HomeController@home');
