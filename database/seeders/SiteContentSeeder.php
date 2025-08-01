<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiteContent;

class SiteContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        SiteContent::create([
            // SEO Section
            'page_title' => 'Taxi Service in Kanpur | 24x7 Cab Booking | Nanditaxi',
            'meta_title' => '24x7 Cab Booking in Kanpur - Nandi Taxi | Reliable & Affordable',
            'meta_keywords' => 'kanpur taxi, 24x7 cab, nandi taxi, kanpur car rental, airport taxi kanpur, outstation cabs',
            'meta_description' => 'Book reliable taxi service in Kanpur anytime with NandiTaxi. Affordable fares, fast bookings, trusted drivers. Available 24/7 for city rides and outstation trips.',
            
            // Hero Section
            'hero_heading' => 'Best Taxi Service in Kanpur',
            'hero_subheading' => 'Fast. Reliable. Affordable. Available 24/7',
            'hero_background' => 'hero-bg.jpg', // Will be stored in storage
            
            // Welcome Section
            'welcome_title' => 'WHAT WE OFFER',
            'welcome_description' => 'We created our taxi service to help you find the most dependable and highest quality taxi services, anytime and anywhere. All our drivers are uniformed and fully licensed.',
            'service1_title' => 'Address Pickup',
            'service1_desc' => 'We always pick up our clients on time, 24/7 availability.',
            'service2_title' => 'Airport Transfer',
            'service2_desc' => 'Specialized in 24 hours airport transfer service.',
            'service3_title' => 'Long Distance',
            'service3_desc' => 'We offer you long distance taxi service to anywhere.',
            'service4_title' => 'Taxi Tours',
            'service4_desc' => 'We offer taxi tours of various durations and complexity.',
            
            // App Download Section
            'app_title' => 'Download the App',
            'app_description' => 'Get our taxi application on your smartphone and discover how easy booking a taxi can be. With this app, you can order a taxi quickly anytime.',
            'play_store_link' => 'https://play.google.com/store/apps/details?id=com.nanditaxi',
            'app_store_link' => 'https://apps.apple.com/in/app/nanditaxi',
            'app_background' => 'app-section-bg.jpg',
            
            // Benefits Section
            'benefits_title' => 'Our Benefits',
            'benefit1_title' => 'Fixed Price',
            'benefit1_desc' => 'The fixed fare is set in every taximeter as the main tariff.',
            'benefit2_title' => 'No Fee',
            'benefit2_desc' => 'We guarantee fixed price and you should not pay tips.',
            'benefit3_title' => '100% Pleasure',
            'benefit3_desc' => 'We have a lot of standing customers and high ratings.',
            'benefit4_title' => 'Nationwide',
            'benefit4_desc' => 'Our application is the easiest way to book a taxi.',
            'benefits_image' => 'benefits-car.jpg',
            
            // Rewards Section
            'rewards_title' => 'Get Your Rewards',
            'rewards_description' => 'NandiTaxi helps you to find the highest quality taxi services anytime. Our drivers are uniformed, fully licensed and the office staff is trained to the highest standards. We can help you to save time and money.',
            'rewards_button_text' => 'Learn More',
            'rewards_image' => 'rewards-woman.jpg',
            
            // Testimonials Section
            'testimonials_title' => 'Clients About Us',
            'testimonial1_text' => 'We used your taxi service for the first time after seeing good reports online. Very efficient, and smart driver with a very clean vehicle.',
            'testimonial1_author' => 'RAJESH KUMAR, KANPUR',
            'testimonial2_text' => 'Prompt and professional service. I always book your taxi when I travel to the airport. Great team!',
            'testimonial2_author' => 'PRIYA SHARMA, LUCKNOW',
            'testimonial3_text' => 'Fast, clean, reliable. Easy to book and excellent pricing. Highly recommended!',
            'testimonial3_author' => 'AMIT SINGH, DELHI',
            
            // Footer Section
            'footer_description' => 'We created our taxi to help you to find the most dependable and highest quality taxi services, anytime and anywhere without any problems.',
            'footer_phone1' => '7007294764',
            'footer_phone2' => '7007294764',
            'footer_email' => 'info@nanditaxi.com',
            'footer_address' => 'Kanpur, Uttar Pradesh',
            'copyright_text' => '© NandiTaxi 2024. All Rights Reserved.',
            
            // Default values
            'created_at' => now(),
            'updated_at' => now(),
        ]);            
    }
}
