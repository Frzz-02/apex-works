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
        Schema::create('section_hero', function (Blueprint $table) {
            $table->id();
            
            // Content
            $table->string('mood_tag', 100)->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('cta_text', 50)->nullable();
            $table->string('cta_url')->nullable();
            
            // Media
            $table->string('image_path')->nullable();
            $table->string('image_alt')->nullable();
            $table->text('fallback_image_url')->nullable();
            
            // Display Settings
            $table->integer('panel_order')->default(0);
            $table->decimal('background_overlay_opacity', 3, 2)->default(0.10);
            
            // Status
            $table->boolean('is_active')->default(true);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_hero');
    }
};
