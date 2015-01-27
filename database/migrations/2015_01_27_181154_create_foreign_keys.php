<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

    public function up()
    {
        Schema::table('forms', function (Blueprint $table)
        {
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('form_elements', function (Blueprint $table)
        {
            $table->foreign('form_id')->references('id')->on('forms')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('form_element_items', function (Blueprint $table)
        {
            $table->foreign('form_element_id')->references('id')->on('form_elements')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    public function down()
    {
        Schema::table('forms', function (Blueprint $table)
        {
            $table->dropForeign('forms_user_id_foreign');
        });
        Schema::table('form_elements', function (Blueprint $table)
        {
            $table->dropForeign('form_elements_form_id_foreign');
        });
        Schema::table('form_element_items', function (Blueprint $table)
        {
            $table->dropForeign('form_element_items_form_element_id_foreign');
        });
    }

}