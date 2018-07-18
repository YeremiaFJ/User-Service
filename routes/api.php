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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


$router->group(['middleware' => 'auth:api'], function() use ($router) {
  $router->post('authenticate', function(Request $request) {
    if(Auth::check()) {
      return Auth::user();
    } else return null;
  });
});
