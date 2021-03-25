<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions_lists', function (Blueprint $table) {
            $table->id()->comment('主キー');
            $table->string('choice1')->comment('性別');
            $table->string('choice2')->comment('年齢');
            $table->string('choice3')->comment('ご職業');
            $table->string('example1')->comment('その他');
            $table->string('choice4')->comment('どこで知りましたか');
            $table->string('example2')->comment('その他');
            $table->string('choice5')->comment('利用頻度');
            $table->string('choice6')->comment('弊社を選ぶ理由');
            $table->string('example3')->comment('その他');
            $table->string('choice7')->comment('満足度');
            $table->string('example4')->comment('ご意見ご要望');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions_lists');
    }
}
