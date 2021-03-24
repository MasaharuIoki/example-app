<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// アクセス時のルーティング!省略しない
Route::get('/questions', 'App\Http\Controllers\QuestionslistController@index');
// フォーム送信時のルーティング!
Route::get('/questions', 'App\Http\Controllers\QuestionslistController@receiveData');