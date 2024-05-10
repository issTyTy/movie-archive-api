<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movie', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('production')->nullable();
            $table->unsignedBigInteger('geners_id')->nullable();
            $table->foreign('geners_id')->references('id')->on('geners');
            $table->string('director')->nullable();
            $table->string('rate')->nullable();
            $table->text('cover')->image;
            $table->text('video')->video;
            $table->unsignedBigInteger('duraction')->nullable;





        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
