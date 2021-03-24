<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ url('/style.css')  }}">
    </head>
    <body>
    <form method="post" action="" enctype="multipart/form-data">        
    <div id="res1">    
    </div>
    <div id="taitol">
        お客様満足度アンケートご協力のお願い
    </div>
    <div>
        <div id="sabutaitoru">
            <span>
                弊社のサービスをご利用いただき、誠にありがとうございます。
            </span>
            <span>
                この度、さらなるサービス向上を目的とし、
            </span>
            <span>
                アンケートを実施する運びとなりました。
            </span>
            <span>
                お忙しいところ恐れ入りますが、下記のアンケートにご協力いただき、
            <span>
                ご意見をお聞かせ願えますと幸いです。
            </span>
        </div>
        <br />
        @if ($errors->any())
            <div class="errors">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif
        @isset ($status)
            <div class="complete">
                <p>
                バリデーションを通過しました
                </p>
            </div>
        @endisset
        <div>
            <strong>
                お客様について
            </strong>
            <br />
            <div id="box1">
                <span>
                    <strong>
                        性別　
                    </strong>
                </span>    
            </div>
            <div id="box2">
                <span>
                    <input type="radio" name="choice1" id="c1" value="男性"/>
                    <label for="c1">
                        男性　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice1" id="c2" value="女性"/>
                    <label for="c2">
                        女性　
                    </label>
                </span>
            </div>
            <div id="box3">
                <span>
                    <strong>
                        年齢　
                    </strong>
                </span>
            </div>
            <div id="box4">
                <span>
                    <input type="radio" name="choice2" id="c3" value="10代"/>
                    <label for="c3">
                        10代　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice2" id="c4" value="20代"/>
                    <label for="c4">
                        20代　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice2" id="c5" value="30代"/>
                    <label for="c5">
                        30代　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice2" id="c6" value="40代"/>
                    <label for="c6">
                        40代　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice2" id="c7" value="50代"/>
                    <label for="c7">
                        50代　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice2" id="c8" value="60代"/>
                    <label for="c8">
                        60代　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice2" id="c9" value="70代以上"/>
                    <label for="c9">
                        70代以上　
                    </label>
                </span>
            </div>
            </div>
            <div id="box5">
                <span>
                    <strong>
                        ご職業
                    </strong>
                </span>
            </div>
            <div id="box6">
                <span>
                    <input type="radio" name="choice3" id="c10" value="主婦"/>
                    <label for="c10">
                        主婦　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice3" id="c11" value="会社員"/>
                    <label for="c11">
                        会社員　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice3" id="c12" value="公務員"/>
                    <label for="c12">
                        公務員　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice3" id="c13" value="自営業"/>
                    <label for="c13">
                        自営業　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice3" id="c14" value="学生"/>
                    <label for="c14">
                        学生　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice3" id="c15" value="アルバイト"/>
                    <label for="c15">
                        アルバイト　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice3" id="c16" value="その他"/>
                    <label for="c16">
                        その他
                    </label>
                    <input type="text" name="example3" size="10" maxlength="7" value=""/>
                </span>
            </div>
            <br />
            <div id="Q1">
                <strong>
                    Q1.弊社のサービスをどこでお知りになりましたか？
                </strong>
                <br />
                <span>
                    <input type="radio" name="choice4" id="c17" value="テレビ"/>
                    <label for="c17">
                        テレビ　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice4" id="c18" value="ラジオ"/>
                    <label for="c18">
                        ラジオ　
                    </label>
                <span>
                    <input type="radio" name="choice4" id="c19" value="雑誌"/>
                    <label for="c19">
                        雑誌　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice4" id="c20" value="新聞・チラシ"/>
                    <label for="c20">
                        新聞・チラシ　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice4" id="c21" value="インターネト検索"/>
                    <label for="c21">
                        インターネット検索　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice4" id="c22" value="SNS（Twitter・Instagram/Facebook)"/>
                    <label for="c22">
                        SNS（Twitter・Instagram/Facebook)　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice4" id="c23" value="家族・友人・知人からの口コミ"/>
                    <label for="c23">
                        家族・友人・知人からの口コミ　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice4" id="c24" value="その他"/>
                    <label for="c24">
                        その他
                        <input type="text" name="example4" size="21" maxlength="12" value=""/>
                    </label>
                </span>
            </div>
            <div id="Q2">
                <p>
                <strong>
                    Q2.弊社サービスの利用頻度を教えてください。
                </strong>
                <br />
                <span>
                    <input type="radio" name="choice5" id="c25" value="ほぼ毎日(1週間に4~7回)"/>
                    <label for="c25">
                        ほぼ毎日(1週間に4~7回)　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice5" id="c26" value="1週間に2~4回程度"/>
                    <label for="c26">
                        1週間に2~4回程度　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice5" id="c27" value="週に1回程度"/>
                    <label for="c27">
                        週に1回程度　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice5" id="c28" value="月に1回程度"/>
                    <label for="c28">
                        月に1回程度　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice5" id="c29" value="2~3ヶ月に1回程度"/>
                    <label for="c29">
                        2~3ヶ月に1回程度　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice5" id="c30" value="半年に1回程度"/>
                    <label for="c30">
                        半年に1回程度　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice5" id="c31" value="それ以下の頻度"/>
                    <label for="c31">
                        それ以下の頻度
                    </label>
                </span>
            </p>
        </div>
        <div>
            <p>
                <strong>
                    Q3.弊社サービスを利用する理由を教えてください　
                    <span>
                        (複数回答可)
                    </span>
                </strong>
                <br />
                <span>
                    <input type="checkbox" name="choice6" id="c32" value="他社より安いから"/>
                    <label for="c32">
                        他社より安いから　　　　　　　
                    </label>
                </span>
                <span>
                    <input type="checkbox" name="choice6" id="c33" value="評判がよかったから"/>
                    <label for="c33">
                        評判がよかったから　
                    </label>
                </span>
                <br />
                <span>
                    <input type="checkbox" name="choice6" id="c34" value="企業として信頼しているから"/>
                    <label for="c34">
                        企業として信頼しているから　　
                    </label>
                </span>
                <span>
                    <input type="checkbox" name="choice6" id="c35" value="使い勝手がよいから"/>
                    <label for="c35">
                        使い勝手がよいから
                    </label>
                </span>
            </p>
        </div>
        <div>
            <p> 
                <strong>
                    その他にもございましたらご記入ください。
                </strong>
                <br />
                <textarea class="ex1" name="example1" cols="30" rows="10">
                </textarea>
            </p>
        </div>
        <div>
            <p>
                <strong>
                    Q4. 弊社サービスに対する満員度を教えてください。
                </strong>
                <br />
                <span>
                    <input type="radio" name="choice7" id="c36" value="極めて満足"/>
                    <label for="c36">
                        極めて満足　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice7" id="c37" value="満足"/>
                    <label for="c37">
                        満足　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice7" id="c38" value="やや満足"/>
                    <label for="c38">
                        やや満足　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice7" id="c39" value="どちらとも言えない"/>
                    <label for="c39">
                        どちらとも言えない　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice7" id="c40" value="やや不満"/>
                    <label for="c40">
                        やや不満　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice7" id="c41" value="不満"/>
                    <label for="c41">
                        不満　
                    </label>
                </span>
                <span>
                    <input type="radio" name="choice7" id="c42" value="極めて不調"/>
                    <label for="c42">
                        極めて不調
                    </label>
                </span>
            </p>
            <div>
                <strong>
                    Q5. 弊社サービスに対するご意見・ご要望がありましたら、
                    <span>
                        ご自由にお書きください。
                    </span>
                </strong>
                <br />
                例) ●●をもっと安くしてほしい。
                <span>
                    △△が使いにくいので改善できないか　など
                </span>
                <textarea class="ex2" name="example2" cols="30" rows="10">
                </textarea>
                <p>

                </p>
                </div>
            </div>
            <div>
                <p>
                    アンケートは以上です。
                    <br />
                    <span>
                        個人情報の保護に基づき、本アンケートは厳重に保管し、
                    </span>
                    <span>
                        いただきました情報をもとにサービスの向上に努めてまいります。
                    </span>
                    <span>
                        ご協力いただき、誠にありがとうございました。
                    </span>
                </p>
            </div>
            <script type="text/javascript">
                var n, y, m, d, outData;
                n = new Date();
                y = n.getFullYear();
                m = n.getMonth() + 1;
                d = n.getDate();
                outData = y + "年" + m + "月" + d + "日";
                var target = document.getElementById("res1");
                target.innerHTML = outData;
            
            </script>
            <h1>POST送信</h1>
            
                <input type="text" name="imputName" size="15" value="TRYPHP"/>
                <input type="submit" value="送信"/> 
    </form>
    </body>
</html>