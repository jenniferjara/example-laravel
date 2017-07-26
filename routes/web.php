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

Route::get('/reconocimiento', ['as' => 'pages.reconocimiento', 'uses' => 'LayoutsController@reconocimiento']);

Route::get('/beneficios', ['as' => 'pages.beneficio', 'uses' => 'LayoutsController@beneficio']);

Route::get('/medicion', ['as' => 'pages.medicion', 'uses' => 'LayoutsController@medicion']);

Route::get('/nosotros', ['as' => 'pages.nosotros', 'uses' => 'LayoutsController@about']);

Route::get('/prueba-gratis', ['as' => 'pages.free', 'uses' => 'LayoutsController@gratis']);

Route::get('/contáctanos', ['as' => 'pages.contacto', 'uses' => 'LayoutsController@contacto']);