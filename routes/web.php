<?php

use App\Http\Middleware\VerifyCsrfToken;

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

Route::get('/',  [
    'as' => 'index',
    'uses' => function(){
        return view('index');
    }
]);

Route::get('/whoweare',  [
    'as' => 'whoweare',
    'uses' => function(){
        return view('whoweare');
    }
]);

Route::get('/whatwedo',  [
    'as' => 'whatwedo',
    'uses' => function(){
        return view('whatwedo');
    }
]);

Route::get('/clients',  [
    'as' => 'clients',
    'uses' => function(){
        return view('clients');
    }
]);

Route::get('/contactus',  [
    'as' => 'contactus',
    'uses' => function(){
        return view('contactus');
    }
]);

Route::post('/inquiry',  [
    'as' => 'inquiry',
    'uses' => function(){
        return "Hello World";
    }
]);