<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FichaController;
use App\Http\Controllers\Anamnesis;
use App\Http\Controllers\AnamnesisOdontologica;

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
