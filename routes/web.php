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

/*
|--------------------------------------------------------------------------
| Supernova - Consideraciónes
|--------------------------------------------------------------------------
| 
| Las rutas declaradas deberán expresar el contenido a mostrar y 
| deberán de escribirse en el idioma principal de la aplicación
| 
*/

Route::get('/', 'LandingController@home');
Route::get('/login', 'LandingController@accessRedirect');
Route::get('/entrar', 'LandingController@access');

Route::get('/olvide-mi-contrasena', 'LandingController@passwordRecovery');

// Punto de entrada para las rutas correspondientes al administrador las cuales llevarán VUEJS
Route::get('/administrador/{vue_capture?}', function () { return view('templates.dashboard'); })->where('vue_capture', '[\/\w\.-]*');
Route::get('/nosotros', function(){
    return view('templates.nosotros');
});
Route::get('/blog', function(){
    return view('templates.blog');
});
Route::get('/quiz', function(){
    return view('templates.quiz');
});