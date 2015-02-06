<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionsTable extends Migration {

    public function up()
    {
        Schema::create('questions', function (Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->integer('form_id')->unsigned()->references('id')->on('forms');
            $table->string('heading');
            $table->text('description');
            $table->string('type');
            $table->boolean('required');
        });
    }

    public function down()
    {
        Schema::drop('questions');
    }

}