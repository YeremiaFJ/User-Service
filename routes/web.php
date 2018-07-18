<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () { return view('/welcome'); });

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/get_api_key', function(Request $request) {
  $request->request->add([
    'grant_type' => 'authorization_code',
    'client_id' => '3',
    'client_secret' => 'gOVgi1hVb6ZyDGST0TUr4YnShYsMYjDWxz1DGE6e',
    'redirect_uri' => 'http://itemku.productnonspa/callback',
    'code' => $request->input('code'),
  ]);
  $tokenRequest = Request::create(url('oauth/token'), 'post');
  $response = Route::dispatch($tokenRequest);
  if(isset(json_decode($response->getContent())->error)) return redirect($request->input('url'));
  return redirect($request->input('url').'?api_key='.json_decode($response->getContent())->access_token);
});
