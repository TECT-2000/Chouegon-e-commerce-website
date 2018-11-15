<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyProduits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('commande_items',function(Blueprint $table){
            $table->integer('produit_id')->unsigned()->index();
        });
        Schema::table('produits',function(Blueprint $table){
            $table->integer('type_rayon_id')->unsigned()->index();
        });
        Schema::table('produits',function(Blueprint $table){
            $table->integer('rayon_id')->unsigned()->index();
        });

        Schema::table('produits',function(Blueprint $table){
            $table->integer('sous_categorie_id')->unsigned()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produits', function (Blueprint $table) {
            //
        });
    }
}
