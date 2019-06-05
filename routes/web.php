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
Route::get('/',function()
{
    return redirect('/entrar');
});

Route::get('/showmeals',"MealController@index");
Route::get('/render',"MealController@render");


Route::prefix('/administrador')->group(function(){
    Route::get('/','UserController@render');
});


Route::get('/', 'LandingController@home');
Route::get('/login', 'LandingController@accessRedirect');
Route::get('/entrar', 'LandingController@access');

Route::get('/olvide-mi-contrasena', 'LandingController@passwordRecovery');

// Punto de entrada para las rutas correspondientes al administrador las cuales llevarán VUEJS
// Route::get('/administrador/{vue_capture?}', function () { return view('templates.dashboard'); })->where('vue_capture', '[\/\w\.-]*');

Route::get('/nosotros', function(){
    return view('templates.nosotros');
});
Route::get('/blog', function(){
    return view('templates.blog');
});
Route::get('/quiz', function(){
    return view('templates.quiz');
});
Route::get('/comenzar', function(){
    return view('templates.comenzar');
});
Route::get('/resultados', function(){
    return view('templates.resultados');
});
Route::get('/calendario', function(){
    return view('templates.calendario');
});

Route::get('/pasouno', function(){
    return view('templates.correo');
});
Route::get('/pasodos', function(){
    return view('templates.pago');
});

Route::get('/pasotres', function(){
    return view('templates.tarjeta');
});

Route::get('/quiz-two', function(){
    return view('templates.quiz-two');
});
Route::get('/email', function(){
    return view('emails.email');
});
Route::get('/papayafit', function(){
    return view('templates.log');
});

Route::get('/home2', function(){
    return view('templates.home2');
});
Route::get('/terminos', function(){
    return view('templates.terminos');
});
// Route::get('/pdf', 'PdfController@invoice');
Route::get('/pdfcot','PdfController@showpdf');	
Route::get('pdf', 'PdfController@invoice');
Route::get('pdfd', 'PdfController@downloadpdf');
Route::post('/sendemail','EmailController@sendEmail');
Route::post('/newuser','UserController@store');