<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
// アクセス時のルーティング!省略しない
Route::get('/questions', 'App\Http\Controllers\QuestionslistController@index');
//Route::get('/questions', 'App\Http\Controllers\SampleValiRequest@index');
// フォーム送信時のルーティング!
Route::get('/questions/1', 'App\Http\Controllers\QuestionslistController@receiveData');
//Route::get('/questions', 'App\Http\Controllers\SampleValiRequest@receiveData');
Route::get('/aaa', function () {

    $item = new \App\Models\Questionslist;
    
    $item->choice1 = 1;
    $item->save();
     
    // ※項目が足りて得ないのでエラーがでます。
     
    dump($item);
     
    return "";
    });