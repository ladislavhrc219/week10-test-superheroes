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

Route::get('../resources/views/selection.blade.php', function () {
    return view('selection');
});


Route::get('/superhero/{$superhero_slug}', 'SuperheroController@show');

//Question8
Route::get('/superhero/index', 'SuperheroController@index');


Auth::routes();
