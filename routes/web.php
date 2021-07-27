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
require __DIR__.'/auth.php';

Route::get('/','Website\HomeController@index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('admin/login','Admin\Auth\LoginController@index');
//Route::get('login','Admin\Auth\LoginController@index');

Route::group([
	'namespace' => 'Admin',
	'as'=>'admin.',
	'prefix' => 'admin',
	'middleware' => ['auth']
],function(){

	Route::get('dashboard','DashboardController@index')->name('dashboard.index');
	Route::resource('user', 'UserController');
	Route::resource('height', 'HeightController');
	Route::resource('weight', 'WeightController');
	Route::resource('age', 'AgeController');
	
});