<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\SiteContent;
use App\Models\User;

class ContentController extends Controller
{
    public function dashboard()
    {
        $content = SiteContent::firstOrNew(['id' => 1]);
        return view('webpage.dashboard', compact('content'));
    }

    public function showHomepage()
    {
        $content = SiteContent::firstOrNew(['id' => 1]);
        return view('webpage.index', compact('content'));
    }

    public function showAbout()
    {
        $content = SiteContent::firstOrNew(['id' => 1]); // Use different ID or key if needed
        return view('webpage.aboutus', compact('content'));
    }

    public function showReviews()
    {
        $content = SiteContent::firstOrNew(['id' => 1]);
        return view('webpage.review', compact('content'));
    }

    public function showContact()
    {
        $content = SiteContent::firstOrNew(['id' => 1]);
        return view('webpage.contactus', compact('content'));
    }

    // Handle booking form submission

    public function edit()
    {
        $content = SiteContent::first();
        return view('admin.content-edit', compact('content'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            // SEO Section
            'page_title' => 'nullable|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_keywords' => 'nullable|string|max:500',
            'meta_description' => 'nullable|string|max:500',
            
            // Hero Section
            'hero_heading' => 'nullable|string|max:255',
            'hero_subheading' => 'nullable|string|max:255',
            'hero_background' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'remove_hero_background' => 'nullable|boolean',
            
            // Welcome Section
            'welcome_title' => 'nullable|string|max:255',
            'welcome_description' => 'nullable|string',
            'service1_title' => 'nullable|string|max:100',
            'service1_desc' => 'nullable|string|max:200',
            'service2_title' => 'nullable|string|max:100',
            'service2_desc' => 'nullable|string|max:200',
            'service3_title' => 'nullable|string|max:100',
            'service3_desc' => 'nullable|string|max:200',
            'service4_title' => 'nullable|string|max:100',
            'service4_desc' => 'nullable|string|max:200',
            
            // App Download Section
            'app_title' => 'nullable|string|max:255',
            'app_description' => 'nullable|string',
            'play_store_link' => 'nullable|url|max:255',
            'app_store_link' => 'nullable|url|max:255',
            'app_background' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'remove_app_background' => 'nullable|boolean',
            
            // Benefits Section
            'benefits_title' => 'nullable|string|max:255',
            'benefit1_title' => 'nullable|string|max:100',
            'benefit1_desc' => 'nullable|string|max:200',
            'benefit2_title' => 'nullable|string|max:100',
            'benefit2_desc' => 'nullable|string|max:200',
            'benefit3_title' => 'nullable|string|max:100',
            'benefit3_desc' => 'nullable|string|max:200',
            'benefit4_title' => 'nullable|string|max:100',
            'benefit4_desc' => 'nullable|string|max:200',
            'benefits_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'remove_benefits_image' => 'nullable|boolean',
            
            // Rewards Section
            'rewards_title' => 'nullable|string|max:255',
            'rewards_description' => 'nullable|string',
            'rewards_button_text' => 'nullable|string|max:50',
            'rewards_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'remove_rewards_image' => 'nullable|boolean',
            
            // Testimonials Section
            'testimonials_title' => 'nullable|string|max:255',
            'testimonial1_text' => 'nullable|string',
            'testimonial1_author' => 'nullable|string|max:100',
            'testimonial2_text' => 'nullable|string',
            'testimonial2_author' => 'nullable|string|max:100',
            'testimonial3_text' => 'nullable|string',
            'testimonial3_author' => 'nullable|string|max:100',
            
            // Footer Section
            'footer_description' => 'nullable|string',
            'footer_phone1' => 'nullable|string|max:20',
            'footer_phone2' => 'nullable|string|max:20',
            'footer_email' => 'nullable|email|max:100',
            'footer_address' => 'nullable|string|max:255',
            'copyright_text' => 'nullable|string|max:255',
        ]);

        // Get the existing content or create new if doesn't exist
        $content = SiteContent::firstOrNew(['id' => 1]);

        // Handle image uploads and deletions
        $this->handleImageUpload($request, $data, 'hero_background', $content);
        $this->handleImageUpload($request, $data, 'app_background', $content);
        $this->handleImageUpload($request, $data, 'benefits_image', $content);
        $this->handleImageUpload($request, $data, 'rewards_image', $content);

        // Update or create the content
        $content->fill($data);
        $content->save();

        return redirect()->back()->with('success', 'Homepage content updated successfully!');
    }

    protected function handleImageUpload($request, &$data, $fieldName, $content)
    {
        // Handle image removal
        if ($request->has('remove_'.$fieldName) && $content->$fieldName) {
            Storage::delete($content->$fieldName);
            $data[$fieldName] = null;
        }

        // Handle new image upload
        if ($request->hasFile($fieldName)) {
            // Delete old image if exists
            if ($content->$fieldName) {
                Storage::delete($content->$fieldName);
            }
            
            // Store new image
            $data[$fieldName] = $request->file($fieldName)->store('content-images', 'public');
        } else {
            // Keep existing image if no new upload and not marked for removal
            unset($data[$fieldName]);
        }
    }

}

