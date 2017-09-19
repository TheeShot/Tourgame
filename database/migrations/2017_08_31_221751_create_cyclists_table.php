<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCyclistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    
    {
        Schema::create('cyclists', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('team_id');

            $table->integer('startNumber');

            $table->string('lastName', 50);

            $table->string('firstName', 50);

            $table->string('nationality', 3);

            $table->boolean('start');

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
        Schema::dropIfExists('cyclists');
    }
}
