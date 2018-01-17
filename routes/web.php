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

Route::get('/index', 'IndexController@bienvenue');




Route::get('/selectDrink','SelectDrinkController@listDrink');



Route::get('/ventes',function(){
	return view('Ventes');
});

Route::get('/ingredients','IngredientController@listIngredients');


Route::get('/selectDrink','SelectDrinkController@selectDrink');

Route::get('/recettes','RecetteController@listRecettes');

