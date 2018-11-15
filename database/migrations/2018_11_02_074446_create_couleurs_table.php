<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouleursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('couleurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->timestamps();
        });
        Schema::create('produit_couleur',function(Blueprint $table){
            $table->increments('id');
           $table->integer('produit_id')->unsigned()->index();
           $table->integer('couleur_id')->unsigned()->index();
           $table->foreign('produit_id')->references('id')->on('produits')->onDelete('cascade');
            $table->foreign('couleur_id')->references('id')->on('couleurs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('couleurs');
    }
}
