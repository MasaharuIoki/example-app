<?php

namespace App\Http\Controllers;

use App\Models\questionslist;
use Illuminate\Http\Request;

class QuestionslistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $choice = $request->choice;
        $choice2 = $request->choice2;
        $choice3 = $request->choice3;
        $ex1 = $request->ex1;
        $choice4 = $request->choice5;
        $ex2 = $request->ex2;
        
        $choice = [
            "c1" => "男性",
            "c2" => "女性"
        ];
        $choice2 = [
            "c3" => "10代",
            "c4" => "20代",
            "c5" => "30代",
            "c6" => "40代",
            "c7" => "50代",
            "c8" => "60代",
            "c9" => "70代以上"
        ];
        $choice3 = [
            "c10" => "主婦",
            "c11" => "会社員",
            "c12" => "公務員",
            "c13" => "自営業",
            "c14" => "学生",
            "c15" => "アルバイト",
            "c16" => "その他"
        ];
        $example3 = $request->example3;
        $Item = new Item;
        $Item->c_example3 = $example3;
        $choice4 = [
            "c17" => "テレビ",
            "c18" => "ラジオ",
            "c19" => "雑誌",
            "c20" => "新聞・チラシ",
            "c21" => "インターネット検索",
            "c22" => "SNS（Twitter・Instagram/Facebook)",
            "c23" => "家族・友人・知人からの口コミ",
            "c24" => "その他"
        ];
        $example4 = $request->example4;
        $Item = new Item;
        $Item->c_ex1 = $example4;
        $choice5 = [
            "c25" => "ほぼ毎日(週に4~7回)",
            "c26" => "週に2~4回程度",
            "c27" => "週に1回程度",
            "c28" => "月に1回程度",
            "c29" => "2~3ヶ月に1回程度",
            "c30" => "半年に1回程度",
            "c31" => "それ以下の頻度",
        ];
        $choice6 = [
            "c32" => "他社より安いから",
            "c33" => "評判がよかったから",
            "c34" => "企業として信頼しているから",
            "c35" => "使い勝手がよいから"
        ];
        $ex1 = $request->ex1;
        $Item = new Item;
        $Item->c_ex1 = $ex1;
        $choice7 = [
            "c36" => "極めて満足",
            "c37" => "満足",
            "c38" => "やや満足",
            "c39" => "どちらとも言えない",
            "c40" => "やや不満",
            "c41" => "不満",
            "c42" => "極めて不満"
        ];
        $ex2 = $request->ex2;
        $Item = new Item;
        $Item->c_ex2 = $ex2;
        $Item->save();

      
            
        
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
