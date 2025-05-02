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
        Schema::create('ghibli_films', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('director');
            $table->integer('release_year');
            $table->integer('runtime');
            $table->bigInteger('box_office')->nullable();
            $table->boolean('is_classic')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ghibli_films');
    }
};
