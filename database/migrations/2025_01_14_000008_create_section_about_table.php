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
        Schema::create('section_about', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('blockquote')->nullable();
            $table->text('description')->nullable();
            $table->string('checklist_1')->nullable();
            $table->string('checklist_2')->nullable();
            $table->string('checklist_3')->nullable();
            $table->string('image')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->string('image_4')->nullable();
            $table->string('image_5')->nullable();
            $table->string('image_6')->nullable();
            $table->string('image_7')->nullable();
            $table->string('image_8')->nullable();
            $table->string('image_9')->nullable();
            $table->string('image_10')->nullable();
            $table->string('image_11')->nullable();
            $table->string('image_12')->nullable();
            $table->string('image_13')->nullable();
            $table->string('image_14')->nullable();
            $table->string('image_15')->nullable();
            $table->string('image_16')->nullable();
            $table->string('image_17')->nullable();
            $table->string('image_18')->nullable();
            $table->string('video_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_about');
    }
};
