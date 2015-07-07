<?php

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
    $prisoner_count = \PrisonManagementSystem\Prisoner::count();
    $prisoners = \PrisonManagementSystem\Prisoner::latest()->take(10)->get();
    return view('dashboard',compact('prisoner_count','prisoners'));
});

Route::controller('auth','Auth\AuthController');
Route::controller('password','Auth\PasswordController');
// 'middleware' => 'auth'
Route::group([],function(){
    Route::resource('prisoner','PrisonerController');
    Route::resource('guard','GuardController');
    Route::resource('cell','GuardController');
});

Route::get('prisoner-pic/{path}',function($path){
    $path = storage_path("prisoners/".$path);
    if(!File::exists($path)){
        abort(404);
    }
    header('content-type: image/jpeg');
    echo File::get($path);
});