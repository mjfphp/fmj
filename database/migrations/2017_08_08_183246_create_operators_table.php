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
            $table->string('imm')->unique();
            $table->string('name');
            $table->string('cin')->unique();
            $table->integer('n_phone')->unique();
            $table->string('n_pass')->nullable();
            $table->date('birthDate')->nullable();
            $table->string('ville')->nullable();
            $table->date('debutC');
            $table->date('finC');
            $table->string('examMedical')->nullable();
            $table->string('poste')->nullable();
            $table->boolean('active');
            $table->string('depart')->nullable();
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
