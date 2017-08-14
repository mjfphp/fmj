<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imm');
            $table->string('name');
            $table->string('cin');
            $table->integer('n_phone');
            $table->string('n_pass');
            $table->date('birthDate');
            $table->string('ville');
            $table->date('debutC');
            $table->date('finC');
            $table->string('examMedical');
            $table->string('poste');
            $table->string('active');
            $table->string('n_depart');
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
        Schema::dropIfExists('operators');
    }
}
