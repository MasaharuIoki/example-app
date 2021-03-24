<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/questions','app\Http\Controllers\QuestionslistController@index');