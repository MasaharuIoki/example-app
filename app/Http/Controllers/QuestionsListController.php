<?php

namespace App\Http\Controllers;

use App\Models\QuestionsList;
use Illuminate\Http\Request;

class QuestionsListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
    public function receiveData(SampleValiRequest $request)
    {
        $request->questionslistdate
        ([
            'choice1'=>'required',
            'choice2'=>'required',
            'choice3'=>'required',
            'ex1' => '|string|max:255',
            'choice4'=>'required',
            'ex2' => '|string|max:255',
            'choice5'=>'required',
            'choice6'=>'required',
            'example3' => '|string|max:255',
            'choice7'=>'required',
            'example4' => '|string|max:255',
        ]);
        
        return view('sample_vali', ['status' => true]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuestionsList  $questionsList
     * @return \Illuminate\Http\Response
     */
    public function show(QuestionsList $questionsList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuestionsList  $questionsList
     * @return \Illuminate\Http\Response
     */
    public function edit(QuestionsList $questionsList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\QuestionsList  $questionsList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuestionsList $questionsList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuestionsList  $questionsList
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuestionsList $questionsList)
    {
        //
    }
}
