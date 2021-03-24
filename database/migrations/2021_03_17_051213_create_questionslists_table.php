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
            $table->string('choice1');
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
        Schema::dropIfExists('questionslists');
    }
}
