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
        Schema::create('navbar', function (Blueprint $table) {
            $table->id();
            
            // Menu Info
            $table->string('menu_label', 100);
            $table->string('menu_slug', 100);
            $table->string('menu_url', 255)->nullable();
            $table->string('menu_icon', 100)->nullable();
            
            // Position
            $table->string('menu_location', 50);
            $table->integer('menu_order')->default(0);
            $table->unsignedBigInteger('parent_id')->nullable();
            
            // Display Settings
            $table->boolean('show_in_navbar')->default(true);
            $table->boolean('show_in_sidebar')->default(true);
            $table->boolean('show_in_footer')->default(false);
            
            // Link Settings
            $table->boolean('is_external')->default(false);
            $table->boolean('open_new_tab')->default(false);
            $table->boolean('is_button')->default(false);
            $table->string('button_style', 50)->nullable();
            
            // Permissions (optional)
            $table->boolean('require_auth')->default(false);
            $table->json('allowed_roles')->nullable();
            
            // Status
            $table->boolean('is_active')->default(true);
            
            $table->timestamps();
            
            // Foreign Key
            $table->foreign('parent_id')
                  ->references('id')
                  ->on('navbar')
                  ->onDelete('cascade');
            
            // Indexes
            $table->index('menu_location');
            $table->index('menu_order');
            $table->index('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('navbar');
    }
};
