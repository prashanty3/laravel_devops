<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteContent extends Model
{
    //
    protected $fillable = [
        // SEO Section
        'page_title',
        'meta_title',
        'meta_keywords',
        'meta_description',
        
        // Hero Section
        'hero_heading',
        'hero_subheading',
        'hero_background',
        
        // Welcome Section
        'welcome_title',
        'welcome_description',
        'service1_title',
        'service1_desc',
        'service2_title',
        'service2_desc',
        'service3_title',
        'service3_desc',
        'service4_title',
        'service4_desc',
        
        // App Download Section
        'app_title',
        'app_description',
        'play_store_link',
        'app_store_link',
        'app_background',
        
        // Benefits Section
        'benefits_title',
        'benefit1_title',
        'benefit1_desc',
        'benefit2_title',
        'benefit2_desc',
        'benefit3_title',
        'benefit3_desc',
        'benefit4_title',
        'benefit4_desc',
        'benefits_image',
        
        // Rewards Section
        'rewards_title',
        'rewards_description',
        'rewards_button_text',
        'rewards_image',
        
        // Testimonials Section
        'testimonials_title',
        'testimonial1_text',
        'testimonial1_author',
        'testimonial2_text',
        'testimonial2_author',
        'testimonial3_text',
        'testimonial3_author',
        
        // Footer Section
        'footer_description',
        'footer_phone1',
        'footer_phone2',
        'footer_email',
        'footer_address',
        'copyright_text'
    ];
}
