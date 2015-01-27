<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormElementItemsTable extends Migration {

    public function up()
    {
        Schema::create('form_element_items', function (Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->integer('form_element_id')->unsigned();
            $table->string('content');
        });
    }

    public function down()
    {
        Schema::drop('form_element_items');
    }

}