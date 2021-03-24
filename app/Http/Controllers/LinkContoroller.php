<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkContoroller extends Controller
{
    public function index()
    {
        return view('index');
    }
/*    
*/
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
        recquest()->input('choice');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\questionslist  $questionslist
     * @return \Illuminate\Http\Response
     */
    public function show(questionslist $questionslist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\questionslist  $questionslist
     * @return \Illuminate\Http\Response
     */
    public function edit(questionslist $questionslist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\questionslist  $questionslist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, questionslist $questionslist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\questionslist  $questionslist
     * @return \Illuminate\Http\Response
     */
    public function destroy(questionslist $questionslist)
    {
        //
    }
}
