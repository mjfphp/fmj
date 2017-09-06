<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    public function up()
    {
        Schema::create('opps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ref')->unique();
            $table->integer('article_id')->unsigned();
            $table->float('qte');
            $table->string('etat');
            $table->date('dateD')->nullable();
            $table->date('dateF')->nullable();
            $table->string('description');
            $table->integer('param_id')->unsigned()->nullable();
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
        Schema::dropIfExists('opps');
    }
}
