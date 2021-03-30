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
Route::get('/questions2', function ($request) {
dump($request);
})->name('questions2');
//Route::post('/questions/1', 'App\Http\Controllers\QuestionslistController@receiveData');
//Route::get('/questions', 'App\Http\Controllers\SampleValiRequest@receiveData');

//


//
/*
Route::get('aaa', function () {

    $a = new \App\Models\QuestionsList();

    $a->choice1 = '男性';
    $a->choice2 = "10代";
    $a->choice3 = "主婦";
    $a->example1 = "その他";
    $a->choice4 = "テレビ";
    $a->example2 = "その他";
    $a->choice5 = "ほぼ毎日(週に4~7回)";
    $a->choice6 = "他社より安いから";
    $a->example3 = "その他";
    $a->choice7 = "極めて満足";
    $a->example4 = "その他";
   

    //$item->choice1 = 1;
    $a->save();
     
    // ※項目が足りて得ないのでエラーがでます。
     
    dump($a);
     
    return "";
    }); 
    */