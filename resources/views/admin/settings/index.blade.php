@extends('layouts.admin', ['pageTitle' => 'Settings'])
@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-sm-6">
                        <h1 class="m-0">Settings</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">

        <form action="{{ route('admin.settings.update', 1) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <!-- GENERAL INFORMATION -->
                <div class="col-md-6">
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">General Information</h5>

                           
                        </div>

                        <div class="card-body">

                            <div class="mb-3">
                                <label>Site Name</label>
                                <input type="text" name="site_name" class="form-control"
                                    placeholder="Enter Site Name"
                                    value="{{ $settings['site_name']->value ?? '' }}">
                            </div>

                            <div class="mb-3">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control" id="phone_input"
                                    placeholder="Enter Phone Number"
                                    value="{{ $settings['phone']->value ?? '' }}">
                                
                                <!-- Phone Preview -->
                                <small class="text-muted d-block mt-1">
                                    Preview: <span id="phone_preview">{{ $settings['phone']->value ?? '' }}</span>
                                </small>
                            </div>

                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control"
                                    placeholder="Enter Email Address"
                                    value="{{ $settings['email']->value ?? '' }}">
                            </div>

                            <div class="mb-3">
                                <label>Business Address</label>
                                <textarea name="business_address" class="form-control"
                                        placeholder="Enter Business Address">{{ $settings['business_address']->value ?? '' }}</textarea>
                            </div>

                        </div>
                    </div>
                </div>


                <!-- IMAGES -->
                <div class="col-md-6">
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0">Logos & Images</h5>
                        </div>

                        <div class="card-body">

                            <div class="mb-3">
                                <label>Site Logo</label>
                                <input type="file" name="site_logo" class="form-control"
                                    onchange="previewImage(event, 'site_logo_preview')">
                                @if(!empty($settings['site_logo']->value))
                                    <img id="site_logo_preview"
                                        src="{{ Storage::url($settings['site_logo']->value) }}"
                                        class="img-thumbnail mt-2" width="150">
                                @else
                                    <img id="site_logo_preview" class="img-thumbnail mt-2 d-none" width="150">
                                @endif
                            </div>

                            <div class="mb-3">
                                <label>Footer Logo</label>
                                <input type="file" name="site_footer_logo" class="form-control"
                                    onchange="previewImage(event, 'footer_logo_preview')">
                                @if(!empty($settings['site_footer_logo']->value))
                                    <img id="footer_logo_preview"
                                        src="{{ Storage::url($settings['site_footer_logo']->value) }}"
                                        class="img-thumbnail mt-2" width="150">
                                @else
                                    <img id="footer_logo_preview" class="img-thumbnail mt-2 d-none" width="150">
                                @endif
                            </div>

                            <div class="mb-3">
                                <label>Favicon</label>
                                <input type="file" name="site_favicon" class="form-control"
                                    onchange="previewImage(event, 'favicon_preview')">
                                @if(!empty($settings['site_favicon']->value))
                                    <img id="favicon_preview"
                                        src="{{ Storage::url($settings['site_favicon']->value) }}"
                                        class="img-thumbnail mt-2" width="60">
                                @else
                                    <img id="favicon_preview" class="img-thumbnail mt-2 d-none" width="60">
                                @endif
                            </div>

                        </div>
                    </div>
                </div>

@php
    $socials = [
        'facebook_url'   => 'facebook_url',
        'twitter_url'    => 'twitter_url',
        'linkedin_url'   => 'linkedin_url',
        'youtube_url'    => 'youtube_url',
        'instagram_url'  => 'instagram_url',
        'messenger_url'  => 'messenger_url',
        'pinterest_url'  => 'pinterest_url',
        'whatsapp_url'   => 'whatsapp_url',
    ];
@endphp
                <!-- SOCIAL LINKS -->
                <div class="col-md-12">
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-info text-white">
                            <h5 class="mb-0">Social Media Links</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach($socials as $s)
                                    <div class="col-md-6 mb-3">
                                        <label>{{ ucwords(str_replace('_', ' ', $s)) }}</label>
                                        <input type="text" name="{{ $s }}" class="form-control"
                                            placeholder="Enter {{ ucwords(str_replace('_', ' ', $s)) }}"
                                            value="{{ $settings[$s]->value ?? '' }}">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-md-12 mb-3 d-flex justify-content-end">
    <!-- SMALL RIGHT SIDE BUTTON -->
    <button type="submit" class="btn btn-success btn-sm">
        Update
    </button>
</div>

            </div>
        </form>
    </div>
</div>
</div>
</div>

@endsection

@push('js')
<script>
function previewImage(event, id) {
    let img = document.getElementById(id);
    img.src = URL.createObjectURL(event.target.files[0]);
    img.classList.remove('d-none');
}

// Phone Live Preview
document.getElementById('phone_input').addEventListener('input', function() {
    document.getElementById('phone_preview').innerText = this.value;
});
</script>
@endpush
