<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('section_about', function (Blueprint $table) {
            $table->id();
            
            // Section Header
            $table->string('section_label', 100)->default('KEUNGGULAN KAMI');
            $table->string('section_title', 255);
            $table->text('section_description')->nullable();
            
            // Images (3 images in grid)
            $table->enum('image_1_type', ['url', 'upload'])->default('upload');
            $table->text('image_1_source')->nullable();
            $table->string('image_1_alt', 255)->nullable();
            
            $table->enum('image_2_type', ['url', 'upload'])->default('upload');
            $table->text('image_2_source')->nullable();
            $table->string('image_2_alt', 255)->nullable();
            
            $table->enum('image_3_type', ['url', 'upload'])->default('upload');
            $table->text('image_3_source')->nullable();
            $table->string('image_3_alt', 255)->nullable();
            
            // Benefits
            $table->string('benefit_title', 255)->default('Keuntungan memilih sparepart kami:');
            
            // Column 1
            $table->string('benefit_1_text', 255)->nullable();
            $table->string('benefit_1_icon', 100)->default('check');
            $table->boolean('benefit_1_enabled')->default(true);
            
            $table->string('benefit_2_text', 255)->nullable();
            $table->string('benefit_2_icon', 100)->default('check');
            $table->boolean('benefit_2_enabled')->default(true);
            
            $table->string('benefit_3_text', 255)->nullable();
            $table->string('benefit_3_icon', 100)->default('check');
            $table->boolean('benefit_3_enabled')->default(true);
            
            // Column 2
            $table->string('benefit_4_text', 255)->nullable();
            $table->string('benefit_4_icon', 100)->default('check');
            $table->boolean('benefit_4_enabled')->default(true);
            
            $table->string('benefit_5_text', 255)->nullable();
            $table->string('benefit_5_icon', 100)->default('check');
            $table->boolean('benefit_5_enabled')->default(true);
            
            $table->string('benefit_6_text', 255)->nullable();
            $table->string('benefit_6_icon', 100)->default('check');
            $table->boolean('benefit_6_enabled')->default(true);
            
            // Styling
            $table->string('section_background', 50)->default('gray-100');
            $table->string('label_color', 50)->default('blue-600');
            $table->string('title_color', 50)->default('gray-900');
            $table->string('description_color', 50)->default('gray-600');
            $table->string('benefit_icon_color', 50)->default('blue-500');
            
            // Meta
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('section_about');
    }
};