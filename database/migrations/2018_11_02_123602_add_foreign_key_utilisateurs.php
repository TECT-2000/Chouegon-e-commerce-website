<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyUtilisateurs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("taches",function (Blueprint $table){
            $table->integer("utilisateur_id")->unsigned()->index();
        });
        Schema::table('commandes',function(Blueprint $table){
            $table->integer('utilisateur_id')->unsigned()->index();
        });

        Schema::table("operations_comptes",function (Blueprint $table){
            $table->integer("utilisateur_id")->unsigned()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utilisateurs', function (Blueprint $table) {
            //
        });
    }
}
