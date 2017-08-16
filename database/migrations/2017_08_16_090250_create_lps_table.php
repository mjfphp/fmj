<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('opp_id')->unsigned();
            $table->integer('article_id')->unsigned();
            $table->integer('operator_id')->unsigned();

            $table->foreign('opp_id')->references('id')->on('opps')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('article_id')->references('id')->on('articles')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('operator_id')->references('id')->on('operators')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->boolean('qte');
            $table->boolean('prix');
            $table->boolean('montant');
            $table->string('temps');
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
        Schema::dropIfExists('lps');
    }
}
