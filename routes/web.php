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
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'ShowProfile');
Route::get('/medidas', 'ShowMedidas');
Route::get('/historial-medidas', 'HistorialMedidas');
Route::get('/plan-nutricional', 'PlanNutricional');
Route::get('/habitos', 'ShowHabitos')->name('habitos');
Route::get('/habitos-crear', 'ShowHabitos@crearHabito')->name('crear-habito');
Route::post('/habitos', 'ShowHabitos@guardarHabito')->name('guardar-habito');
Route::get('/comidas', 'ShowComidas');
