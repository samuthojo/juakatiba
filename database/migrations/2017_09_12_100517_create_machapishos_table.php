<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMachapishosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machapishos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type', 100);
            $table->string('title', 100);
            $table->string('author', 100);
            $table->string('date', 100);
            $table->string('pdf');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('machapishos');
    }
}
