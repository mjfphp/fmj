<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParamsTable extends Migration
{

    public function up()
    {
        Schema::create('params', function (Blueprint $table) {
            $table->increments('id');
            $table->float('th');//taux horaires
            $table->float('tm');//taux horaires
            $table->float('dm');// divers matieres
            $table->float('dh');//divers horaires
            $table->float('tfa');// transport et frais attache
            $table->float('ao');//Amortissement outillage
            $table->float('fg');//frais generaux
            $table->float('it');//impots et taxes
            $table->float('b');//benefice

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('params');
    }
}
