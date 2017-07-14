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

Route::get('/',  ['as' => 'home.index', 'uses' => 'HomeController@index']);

Route::get('/reconocimiento', ['as' => 'layout.reconocimiento', 'uses' => 'LayoutsController@reconocimiento']);

Route::get('/beneficios', ['as' => 'layout.beneficio', 'uses' => 'LayoutsController@beneficio']);

Route::get('/medicion', ['as' => 'layout.medicion', 'uses' => 'LayoutsController@medicion']);

Route::get('/nosotros', ['as' => 'layout.nosotros', 'uses' => 'LayoutsController@about']);