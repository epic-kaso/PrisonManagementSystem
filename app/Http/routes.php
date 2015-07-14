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
Route::controller('auth','Auth\AuthController');
Route::controller('password','Auth\PasswordController');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/','DashboardController@index');
    Route::get('prisoner/transfer',['as'  => 'prisoner.getTransfer' ,'uses'  => 'PrisonerController@getTransfer']);
    Route::post('prisoner/transfer',['as'  => 'prisoner.postTransfer' ,'uses'  => 'PrisonerController@postTransfer']);

    Route::get('prisoner/acquit',['as'  => 'prisoner.getAcquit' ,'uses'  => 'PrisonerController@getAcquit']);
    Route::post('prisoner/acquit',['as'  => 'prisoner.postAcquit' ,'uses'  => 'PrisonerController@postAcquit']);

    Route::get('prisoner/rehab',['as'  => 'prisoner.getRehab' ,'uses'  => 'PrisonerController@getRehab']);
    Route::post('prisoner/rehab',['as'  => 'prisoner.postRehab' ,'uses'  => 'PrisonerController@postRehab']);

    Route::resource('prisoner','PrisonerController');
    Route::resource('guard','GuardController');
    Route::resource('visitor','VisitorController');
});

Route::get('prisoner-pic/{path}',function($path){
    $path = storage_path("prisoners/".$path);
    if(!File::exists($path)){
        abort(404);
    }
    header('content-type: image/jpeg');
    echo File::get($path);
});