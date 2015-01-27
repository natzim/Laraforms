<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormElementsTable extends Migration {

    public function up()
    {
        Schema::create('form_elements', function (Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->integer('form_id')->unsigned();
            $table->string('heading');
            $table->text('description');
            $table->string('type');
            $table->boolean('required');
        });
    }

    public function down()
    {
        Schema::drop('form_elements');
    }

}