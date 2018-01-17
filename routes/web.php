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

Route::get('index', function () {
    return view('index');
});




Route::get('/ventes',function(){
	return view('Ventes');
});

Route::get('/ingredients', function () {
    return view('ingredients');
});

Route::get('/recettes','RecetteController@list');

Route::get('/selectDrink','SelectDrinkController@selectDrink');
