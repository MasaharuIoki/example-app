<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->inctements('id');
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
        Schema::dropIfExists('categories');
    }
}
