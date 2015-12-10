<?php
use DB;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('test');
    
    
});

Route::post('/admin', function () {
    return view('admin');
    
    
});

Route::post('/add', function(){
   return view('add'); 
});

Route::post('/success', function(){
   return "SUCCESS"; 
});



Route::post('/test', function () {
    return "shit";
    
});


Route::get('/test', function () {
    return "shit";
    
});






Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]); 



/*Route::get('/', 'XController@index');
  return 'Tanga';
*/
