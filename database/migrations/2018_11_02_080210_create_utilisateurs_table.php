<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('email')->unique();
            $table->integer('telephone')->unique();
            $table->enum('etat',array("actif","desactivé"));
            $table->boolean('is_admin');
            $table->integer('somme');
            $table->timestamps();
        });
        Schema::table("messages",function (Blueprint $table){
            $table->integer("recepteur_id")->unsigned()->index();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateurs');
    }
}
