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
        Schema::create('site_contents', function (Blueprint $table) {
            $table->id();

            // SEO Section
            $table->string('page_title')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            
            // Hero Section
            $table->string('hero_heading')->nullable();
            $table->string('hero_subheading')->nullable();
            $table->string('hero_background')->nullable();
            
            // Welcome Section
            $table->string('welcome_title')->nullable();
            $table->text('welcome_description')->nullable();
            $table->string('service1_title')->nullable();
            $table->string('service1_desc')->nullable();
            $table->string('service2_title')->nullable();
            $table->string('service2_desc')->nullable();
            $table->string('service3_title')->nullable();
            $table->string('service3_desc')->nullable();
            $table->string('service4_title')->nullable();
            $table->string('service4_desc')->nullable();
            
            // App Download Section
            $table->string('app_title')->nullable();
            $table->text('app_description')->nullable();
            $table->string('play_store_link')->nullable();
            $table->string('app_store_link')->nullable();
            $table->string('app_background')->nullable();
            
            // Benefits Section
            $table->string('benefits_title')->nullable();
            $table->string('benefit1_title')->nullable();
            $table->string('benefit1_desc')->nullable();
            $table->string('benefit2_title')->nullable();
            $table->string('benefit2_desc')->nullable();
            $table->string('benefit3_title')->nullable();
            $table->string('benefit3_desc')->nullable();
            $table->string('benefit4_title')->nullable();
            $table->string('benefit4_desc')->nullable();
            $table->string('benefits_image')->nullable();
            
            // Rewards Section
            $table->string('rewards_title')->nullable();
            $table->text('rewards_description')->nullable();
            $table->string('rewards_button_text')->nullable();
            $table->string('rewards_image')->nullable();
            
            // Testimonials Section
            $table->string('testimonials_title')->nullable();
            $table->text('testimonial1_text')->nullable();
            $table->string('testimonial1_author')->nullable();
            $table->text('testimonial2_text')->nullable();
            $table->string('testimonial2_author')->nullable();
            $table->text('testimonial3_text')->nullable();
            $table->string('testimonial3_author')->nullable();
            
            // Footer Section
            $table->text('footer_description')->nullable();
            $table->string('footer_phone1')->nullable();
            $table->string('footer_phone2')->nullable();
            $table->string('footer_email')->nullable();
            $table->string('footer_address')->nullable();
            $table->string('copyright_text')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_contents');
    }
};
