<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyRayons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("rayon_sous_cat",function(Blueprint $table){
            $table->increments('id');
            $table->integer('rayon_id')->unsigned()->index();
            $table->integer('sous_cat_id')->unsigned()->index();
            $table->foreign('rayon_id')->references('id')->on('rayons')->OnDelete('cascade');
            $table->foreign('sous_cat_id')->references('id')->on('sous_categories')->onDelete('cascade');
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rayons', function (Blueprint $table) {
            //
        });
    }
}
