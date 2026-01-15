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
        Schema::create('footer', function (Blueprint $table) {
            $table->id();
            $table->string('title_1')->nullable();
            $table->string('title_2')->nullable();
            $table->string('title_3')->nullable();
            $table->string('title_4')->nullable();
            $table->text('description_1')->nullable();
            $table->text('description_2')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('linkname1')->nullable();
            $table->string('linkname2')->nullable();
            $table->string('linkname3')->nullable();
            $table->string('linkname4')->nullable();
            $table->string('linkname5')->nullable();
            $table->string('link1')->nullable();
            $table->string('link2')->nullable();
            $table->string('link3')->nullable();
            $table->string('link4')->nullable();
            $table->string('link5')->nullable();
            $table->string('background_color')->nullable();
            $table->string('title_color')->nullable();
            $table->string('text_color')->nullable();
            $table->string('linkname6')->nullable();
            $table->string('linkname7')->nullable();
            $table->string('linkname8')->nullable();
            $table->string('linkname9')->nullable();
            $table->string('linkname10')->nullable();
            $table->string('link6')->nullable();
            $table->string('link7')->nullable();
            $table->string('link8')->nullable();
            $table->string('link9')->nullable();
            $table->string('link10')->nullable();
            $table->string('linkaddress')->nullable();
            $table->string('attributes1')->nullable();
            $table->string('attributes2')->nullable();
            $table->string('attributes3')->nullable();
            $table->string('attributes4')->nullable();
            $table->string('attributes5')->nullable();
            $table->string('attributes6')->nullable();
            $table->string('attributes7')->nullable();
            $table->string('attributes8')->nullable();
            $table->string('attributes9')->nullable();
            $table->string('attributes10')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footer');
    }
};
