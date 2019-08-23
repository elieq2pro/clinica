<?php

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

// App\User::create([
// 	'name' => 'Elie',
// 	'email' => 'elieqc95@gmail.com',
// 	'password' => bcrypt('kerrigan')
// ]);

Route::view('/', 'home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users','UsersController');
Route::resource('pacientes','PacientesController');
Route::resource('doctores','DoctorsController');
Route::resource('especialidades','SpecialtyController');
