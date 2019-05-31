<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|

*/

// Route::group([

//     'middleware' => 'api',
//     'prefix' => 'auth'

// ], function ($router) {

//     Route::post('login', 'AuthController@login');
//     Route::post('logout', 'AuthController@logout');
//     Route::post('refresh', 'AuthController@refresh');
//     Route::post('me', 'AuthController@me');

// });
Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@authenticate');
Route::post('/logout', 'AuthController@logout');
Route::post('/verify-auth-user','UserController@verify');

Route::group(['middleware' => ['auth:api', 'cors']], function() {
    
    Route::get('/logout-api','UserController@logoutApi');

});


Route::prefix('/user')->group(function () {

    Route::post('/store', 'UserController@store');
    Route::post('/authenticate', 'UserController@authenticate');

    Route::group(['middleware' => ['jwt.verify', 'cors']], function() {
        Route::post('/my-info','UserController@getAuthenticatedUser');
        Route::post('/unauthenticate','UserController@logoutApi');
    });
    
});
