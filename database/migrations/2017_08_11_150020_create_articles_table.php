<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{

    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ref')->unique();
            $table->string('name');
            $table->string('description')->nullable();
            $table->double('standarPrice')->nullable();
            $table->double('weightNet')->nullable();
            $table->string('typ');
            $table->string('uomId');
            $table->string('state')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
