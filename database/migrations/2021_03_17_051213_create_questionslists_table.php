<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionslistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionslists', function (Blueprint $table) {
            $teble->string('choice');
            $teble->string('choice2');
            $teble->string('choice3');
            $teble->string('example1');
            $teble->string('choice4');
            $teble->string('example2');
            $teble->string('choice5');
            $teble->string('choice6');
            $teble->string('example3');
            $teble->string('choice7');
            $teble->string('example4');
            
            $table->inctements('id');
            $table->string('name');
            $teble->string('gender');
            $table->integer('category_id');
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
        Schema::dropIfExists('questionslists');
    }
}
