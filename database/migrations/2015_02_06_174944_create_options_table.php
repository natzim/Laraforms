<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOptionsTable extends Migration {

    public function up()
    {
        Schema::create('options', function (Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->integer('question_id')->unsigned()->references('id')->on('questions');
            $table->string('content');
        });
    }

    public function down()
    {
        Schema::drop('options');
    }

}