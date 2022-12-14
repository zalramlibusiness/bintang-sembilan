<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incoming_wood_detail_item', function (Blueprint $table) {
            $table->id();
            $table->integer('incoming_wood_detail_id')->nullable();
            $table->integer('diameter')->nullable();
            $table->integer('qty')->nullable();
            $table->double('volume')->nullable();
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
        Schema::dropIfExists('incoming_wood_detail_item');
    }
};
