<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyTypeRayons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('type_rayons', function (Blueprint $table) {
            //
        });
    }
}
