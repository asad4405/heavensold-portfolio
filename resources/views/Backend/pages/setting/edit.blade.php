@extends('Backend.layouts.master')
@section('maincontent')
    <div class="card m-5">
        <div class="card-title"
            style="display: flex;justify-content: space-between;align-items: center;color: #566a7f;padding: 1.5rem;opacity: 0.8;margin-bottom: -40px;">
            <h5>Settings Section</h5>
        </div>
        @if (session('success'))
            <div class="alert alert-success mt-2">{{ session('success') }}</div>
        @endif
        <form action="{{ route('admin.setting.update', $setting->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row container mt-4">
                <div class="mb-3 col-lg-6 col-12">
                    <label for="name" class="form-label">Website Name</label>
                    <input type="text" id="name" class="form-control" name="name" value="{{ $setting->name }}"
                        placeholder="Enter here....." required>
                </div>
                <div class="mb-3 col-lg-6 col-12">
                    <label for="logo" class="form-label">Logo</label>
                    <input type="file" id="logo" class="form-control" name="logo" placeholder="Enter here.....">
                    <div class="mt-3">
                        <img src="{{ asset($setting->logo) }}" alt="" width="80">
                    </div>
                </div>
                <div class="mb-3 col-lg-6 col-12">
                    <label for="favicon" class="form-label">Favicon</label>
                    <input type="file" id="favicon" class="form-control" name="favicon" placeholder="Enter here.....">
                    <div class="mt-3">
                        <img src="{{ asset($setting->favicon) }}" alt="" width="80">
                    </div>
                </div>
                <div class="mb-3 col-lg-6 col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" id="email" class="form-control" name="email" value="{{ $setting->email }}"
                        placeholder="Enter here....." required>
                </div>
                <div class="mb-3 col-lg-6 col-12">
                    <label for="phone_one" class="form-label">Phone One</label>
                    <input type="text" id="phone_one" class="form-control" name="phone_one"
                        value="{{ $setting->phone_one }}" placeholder="Enter here....." required>
                </div>
                <div class="mb-3 col-lg-6 col-12">
                    <label for="phone_two" class="form-label">Phone Two</label>
                    <input type="text" id="phone_two" class="form-control" name="phone_two"
                        value="{{ $setting->phone_two }}" placeholder="Enter here.....">
                </div>
                <div class="mb-3 col-lg-6 col-12">
                    <label for="phone_three" class="form-label">Phone Three</label>
                    <input type="text" id="phone_three" class="form-control" name="phone_three"
                        value="{{ $setting->phone_three }}" placeholder="Enter here.....">
                </div>
                <div class="mb-3 col-lg-6 col-12">
                    <label for="footer_text" class="form-label">Footer Text</label>
                    <input type="text" id="footer_text" class="form-control" name="footer_text"
                        value="{{ $setting->footer_text }}" placeholder="Enter here.....">
                </div>
                <div class="mb-3 col-lg-6 col-12">
                    <label for="map" class="form-label">Map Link</label>
                    <input type="text" id="map" class="form-control" name="map" value="{{ $setting->map }}"
                        placeholder="Enter here.....">
                </div>
                <div class="mb-3 col-12">
                    <label for="about_details" class="form-label">About Us Description</label>
                    <textarea name="about_details" id="about_details" class="form-control"
                        required>{{ $setting->about_details }}</textarea>
                </div>
                <div class="mb-3 col-lg-6 col-12">
                    <label for="meta_title" class="form-label">Meta Title</label>
                    <input type="text" id="meta_title" class="form-control" name="meta_title"
                        value="{{ $setting->meta_title }}" placeholder="Enter here.....">
                </div>
                <div class="mb-3 col-lg-6 col-12">
                    <label for="meta_keywords" class="form-label">Meta Keywords</label>
                    <input type="text" id="meta_keywords" class="form-control" name="meta_keywords"
                        value="{{ $setting->meta_keywords }}" placeholder="Enter here.....">
                </div>
                <div class="mb-3 col-lg-6 col-12">
                    <label for="meta_keywords" class="form-label">Meta Description</label>
                    <textarea name="meta_description" id="meta_description"
                        class="form-control">{{ $setting->meta_description }}</textarea>
                </div>
                <div class="mb-3 col-lg-6 col-12">
                    <label for="meta_metaimage" class="form-label">Meta Image</label>
                    <input type="file" id="meta_metaimage" class="form-control" name="meta_metaimage">
                    <div class="mt-3">
                        <img src="{{ asset($setting->meta_metaimage) }}" alt="" width="80">
                    </div>
                </div>
                <div class="mb-3 col-12">
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </div>
            </div>
        </form>

    </div>
@endsection
