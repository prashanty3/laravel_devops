@extends('admin.dashboard')

@section('content')
<style>
    .content-wrapper {
        color: white;
    }

    h4{
        color: white;
    }
</style>
@section('title', 'Edit Homepage Content')
<div class="content-wrapper">
    <div class="container-full">

        <!-- Page Header -->
        <div class="content-header">
            <div class="d-flex align-items-center justify-content-between">
                <h3 class="page-title">Edit Homepage Content</h3>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-sm btn-outline-primary">Back to Dashboard</a>
            </div>
        </div>

        <!-- Content Section -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('content.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="box">
                            <div class="box-body">

                                <!-- SEO Section -->
                                <div class="box box-primary mb-4">
                                    <div class="box-header with-border">
                                        <h4 class="box-title" style="color: white;">SEO Settings</h4>
                                    </div>
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <x-input label="Page Title" name="page_title" value="{{ old('page_title', $content->page_title ?? '') }}" />
                                            </div>
                                            <div class="col-md-6">
                                                <x-input label="Meta Title" name="meta_title" value="{{ old('meta_title', $content->meta_title ?? '') }}" />
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label>Meta Description</label>
                                            <textarea class="form-control" name="meta_description" rows="3">{{ old('meta_description', $content->meta_description ?? '') }}</textarea>
                                        </div>
                                        <div class="form-group mt-3">
                                            <x-input label="Meta Keywords" name="meta_keywords" value="{{ old('meta_keywords', $content->meta_keywords ?? '') }}" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Hero Section -->
                                <div class="box box-success mb-4">
                                    <div class="box-header with-border">
                                        <h4 class="box-title" style="color: white;">Hero Section</h4>
                                    </div>
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <x-input label="Hero Heading" name="hero_heading" value="{{ old('hero_heading', $content->hero_heading ?? '') }}" />
                                            </div>
                                            <div class="col-md-6">
                                                <x-input label="Hero Subheading" name="hero_subheading" value="{{ old('hero_subheading', $content->hero_subheading ?? '') }}" />
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label>Hero Background Image</label>
                                            <input type="file" class="form-control" name="hero_background">
                                            @if(isset($content->hero_background))
                                                <div class="mt-2">
                                                    <img src="{{ asset('storage/'.$content->hero_background) }}" style="max-height: 150px;">
                                                    <label class="mt-2">
                                                        <input type="checkbox" name="remove_hero_background"> Remove current image
                                                    </label>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <!-- Welcome Section -->
                                <div class="box box-info mb-4">
                                    <div class="box-header with-border">
                                        <h4 class="box-title" style="color: white;">Welcome Section</h4>
                                    </div>
                                    <div class="box-body">
                                        <x-input label="Section Title" name="welcome_title" value="{{ old('welcome_title', $content->welcome_title ?? '') }}" />
                                        <div class="form-group mt-3">
                                            <label>Section Description</label>
                                            <textarea class="form-control" name="welcome_description" rows="4">{{ old('welcome_description', $content->welcome_description ?? '') }}</textarea>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <x-input label="Service 1 Title" name="service1_title" value="{{ old('service1_title', $content->service1_title ?? '') }}" />
                                            </div>
                                            <div class="col-md-3">
                                                <x-input label="Service 1 Description" name="service1_desc" value="{{ old('service1_desc', $content->service1_desc ?? '') }}" />
                                            </div>
                                            <div class="col-md-3">
                                                <x-input label="Service 2 Title" name="service2_title" value="{{ old('service2_title', $content->service2_title ?? '') }}" />
                                            </div>
                                            <div class="col-md-3">
                                                <x-input label="Service 2 Description" name="service2_desc" value="{{ old('service2_desc', $content->service2_desc ?? '') }}" />
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <x-input label="Service 3 Title" name="service3_title" value="{{ old('service3_title', $content->service3_title ?? '') }}" />
                                            </div>
                                            <div class="col-md-3">
                                                <x-input label="Service 3 Description" name="service3_desc" value="{{ old('service3_desc', $content->service3_desc ?? '') }}" />
                                            </div>
                                            <div class="col-md-3">
                                                <x-input label="Service 4 Title" name="service4_title" value="{{ old('service4_title', $content->service4_title ?? '') }}" />
                                            </div>
                                            <div class="col-md-3">
                                                <x-input label="Service 4 Description" name="service4_desc" value="{{ old('service4_desc', $content->service4_desc ?? '') }}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- App Download Section -->
                                <div class="box box-warning mb-4">
                                    <div class="box-header with-border">
                                        <h4 class="box-title" style="color: white;">App Download Section</h4>
                                    </div>
                                    <div class="box-body">
                                        <x-input label="Section Title" name="app_title" value="{{ old('app_title', $content->app_title ?? '') }}" />
                                        <div class="form-group mt-3">
                                            <label>Section Description</label>
                                            <textarea class="form-control" name="app_description" rows="3">{{ old('app_description', $content->app_description ?? '') }}</textarea>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <x-input label="Play Store Link" name="play_store_link" value="{{ old('play_store_link', $content->play_store_link ?? '') }}" />
                                            </div>
                                            <div class="col-md-6">
                                                <x-input label="App Store Link" name="app_store_link" value="{{ old('app_store_link', $content->app_store_link ?? '') }}" />
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label>Background Image</label>
                                            <input type="file" class="form-control" name="app_background">
                                            @if(isset($content->app_background))
                                                <div class="mt-2">
                                                    <img src="{{ asset('storage/'.$content->app_background) }}" style="max-height: 150px;">
                                                    <label class="mt-2">
                                                        <input type="checkbox" name="remove_app_background"> Remove current image
                                                    </label>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <!-- Benefits Section -->
                                <div class="box box-danger mb-4">
                                    <div class="box-header with-border">
                                        <h4 class="box-title" style="color: white;">Benefits Section</h4>
                                    </div>
                                    <div class="box-body">
                                        <x-input label="Section Title" name="benefits_title" value="{{ old('benefits_title', $content->benefits_title ?? '') }}" />
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <x-input label="Benefit 1 Title" name="benefit1_title" value="{{ old('benefit1_title', $content->benefit1_title ?? '') }}" />
                                                <textarea class="form-control mt-2" name="benefit1_desc" rows="2">{{ old('benefit1_desc', $content->benefit1_desc ?? '') }}</textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <x-input label="Benefit 2 Title" name="benefit2_title" value="{{ old('benefit2_title', $content->benefit2_title ?? '') }}" />
                                                <textarea class="form-control mt-2" name="benefit2_desc" rows="2">{{ old('benefit2_desc', $content->benefit2_desc ?? '') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <x-input label="Benefit 3 Title" name="benefit3_title" value="{{ old('benefit3_title', $content->benefit3_title ?? '') }}" />
                                                <textarea class="form-control mt-2" name="benefit3_desc" rows="2">{{ old('benefit3_desc', $content->benefit3_desc ?? '') }}</textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <x-input label="Benefit 4 Title" name="benefit4_title" value="{{ old('benefit4_title', $content->benefit4_title ?? '') }}" />
                                                <textarea class="form-control mt-2" name="benefit4_desc" rows="2">{{ old('benefit4_desc', $content->benefit4_desc ?? '') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label>Car Image</label>
                                            <input type="file" class="form-control" name="benefits_image">
                                            @if(isset($content->benefits_image))
                                                <div class="mt-2">
                                                    <img src="{{ asset('storage/'.$content->benefits_image) }}" style="max-height: 150px;">
                                                    <label class="mt-2">
                                                        <input type="checkbox" name="remove_benefits_image"> Remove current image
                                                    </label>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <!-- Rewards Section -->
                                <div class="box box-primary mb-4">
                                    <div class="box-header with-border">
                                        <h4 class="box-title" style="color: white;">Rewards Section</h4>
                                    </div>
                                    <div class="box-body">
                                        <x-input label="Section Title" name="rewards_title" value="{{ old('rewards_title', $content->rewards_title ?? '') }}" />
                                        <div class="form-group mt-3">
                                            <label>Section Description</label>
                                            <textarea class="form-control" name="rewards_description" rows="4">{{ old('rewards_description', $content->rewards_description ?? '') }}</textarea>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label>Button Text</label>
                                            <x-input name="rewards_button_text" value="{{ old('rewards_button_text', $content->rewards_button_text ?? 'Learn More') }}" />
                                        </div>
                                        <div class="form-group mt-3">
                                            <label>Image</label>
                                            <input type="file" class="form-control" name="rewards_image">
                                            @if(isset($content->rewards_image))
                                                <div class="mt-2">
                                                    <img src="{{ asset('storage/'.$content->rewards_image) }}" style="max-height: 150px;">
                                                    <label class="mt-2">
                                                        <input type="checkbox" name="remove_rewards_image"> Remove current image
                                                    </label>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <!-- Testimonials Section -->
                                <div class="box box-success mb-4">
                                    <div class="box-header with-border">
                                        <h4 class="box-title" style="color: white;">Testimonials Section</h4>
                                    </div>
                                    <div class="box-body">
                                        <x-input label="Section Title" name="testimonials_title" value="{{ old('testimonials_title', $content->testimonials_title ?? '') }}" />
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Testimonial 1 Text</label>
                                                    <textarea class="form-control" name="testimonial1_text" rows="3">{{ old('testimonial1_text', $content->testimonial1_text ?? '') }}</textarea>
                                                </div>
                                                <x-input label="Testimonial 1 Author" name="testimonial1_author" value="{{ old('testimonial1_author', $content->testimonial1_author ?? '') }}" class="mt-2" />
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Testimonial 2 Text</label>
                                                    <textarea class="form-control" name="testimonial2_text" rows="3">{{ old('testimonial2_text', $content->testimonial2_text ?? '') }}</textarea>
                                                </div>
                                                <x-input label="Testimonial 2 Author" name="testimonial2_author" value="{{ old('testimonial2_author', $content->testimonial2_author ?? '') }}" class="mt-2" />
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Testimonial 3 Text</label>
                                                    <textarea class="form-control" name="testimonial3_text" rows="3">{{ old('testimonial3_text', $content->testimonial3_text ?? '') }}</textarea>
                                                </div>
                                                <x-input label="Testimonial 3 Author" name="testimonial3_author" value="{{ old('testimonial3_author', $content->testimonial3_author ?? '') }}" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Footer Section -->
                                <div class="box box-info mb-4">
                                    <div class="box-header with-border">
                                        <h4 class="box-title" style="color: white;">Footer Section</h4>
                                    </div>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Footer Description</label>
                                            <textarea class="form-control" name="footer_description" rows="3">{{ old('footer_description', $content->footer_description ?? '') }}</textarea>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <x-input label="Phone Number 1" name="footer_phone1" value="{{ old('footer_phone1', $content->footer_phone1 ?? '') }}" />
                                            </div>
                                            <div class="col-md-4">
                                                <x-input label="Phone Number 2" name="footer_phone2" value="{{ old('footer_phone2', $content->footer_phone2 ?? '') }}" />
                                            </div>
                                            <div class="col-md-4">
                                                <x-input label="Email" name="footer_email" value="{{ old('footer_email', $content->footer_email ?? '') }}" />
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <x-input label="Address" name="footer_address" value="{{ old('footer_address', $content->footer_address ?? '') }}" />
                                        </div>
                                        <div class="form-group mt-3">
                                            <x-input label="Copyright Text" name="copyright_text" value="{{ old('copyright_text', $content->copyright_text ?? '') }}" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit Buttons -->
                                <div class="form-actions mt-4 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-check"></i> Update All Content</button>
                                    <a href="{{ route('admin.dashboard') }}" class="btn btn-danger btn-lg">Cancel</a>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>
</div>
@endsection