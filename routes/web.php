<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// アクセス時のルーティング!省略しない
Route::get('/questions', 'App\Http\Controllers\QuestionslistController@index');
//Route::get('/questions', 'App\Http\Controllers\SampleValiRequest@index');
// フォーム送信時のルーティング!
Route::get('/questions', 'App\Http\Controllers\QuestionslistController@receiveData');
//Route::get('/questions', 'App\Http\Controllers\SampleValiRequest@receiveData');