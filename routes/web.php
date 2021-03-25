<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
// アクセス時のルーティング!省略しない
Route::get('/questions', function ($request) {
dump($request);
})->name('quetions');
//Route::get('/questions', 'App\Http\Controllers\QuestionslistController@index');
//Route::get('/questions', 'App\Http\Controllers\SampleValiRequest@index');
// フォーム送信時のルーティング!
Route::post('/questions2', function ($request) {
dump($request);
})->name('questions2');
//Route::post('/questions/1', 'App\Http\Controllers\QuestionslistController@receiveData');
//Route::get('/questions', 'App\Http\Controllers\SampleValiRequest@receiveData');

Route::get('/aaa', function () {

    $item = new \App\Models\QuestionsList;
    
    $item->choice1 = 1;
    $item->save();
     
    // ※項目が足りて得ないのでエラーがでます。
     
    dump($item);
     
    return "";
    });