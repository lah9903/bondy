<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorykhoiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historykhoi', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('id_user')->nullable();
            $table->string('mon1', 115);
            $table->string('mon2', 115);
            $table->string('mon3', 115);
            $table->tinyInteger('diem1');
            $table->tinyInteger('diem2');
            $table->tinyInteger('diem3');
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
        Schema::dropIfExists('historykhoi');
    }
}
