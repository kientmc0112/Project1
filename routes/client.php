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

Route::group(['prefix' => '/profiles'],function () {
    Route::get('/{profile}/show', 'ProfileController@show');
    Route::get('/{profile}/index', 'ProfileController@index');
});

Route::group(['prefix' => '/course'],function (){
    Route::get('/detail', function () {
        return view('client.course.detail');
    });
    Route::get('/list', function () {
        return view('client.course.list');
    });
});

Route::group(['prefix' => '/history'],function () {
    Route::get('/calender', function() {
        return view('client.history.calender');
    });
    Route::get('/history', function() {
        return view('client.history.history');
    });
});

Route::group(['prefix' => '/task'],function () {
    Route::get('/task', function() {
        return view('client.task.task');
    });
});

Route::group(['prefix' => '/user'],function () {
    Route::get('/supervisor', function() {
        return view('client.user.supervisor');
    });
});
