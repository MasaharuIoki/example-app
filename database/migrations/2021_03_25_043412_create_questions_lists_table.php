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
            $table->inctements('id');
            $table->string('choice1')->comment('性別');
            $table->string('choice2');
            $table->string('choice3');
            $table->string('example1');
            $table->string('choice4');
            $table->string('example2');
            $table->string('choice5');
            $table->string('choice6');
            $table->string('example3');
            $table->string('choice7');
            $table->string('example4');
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
