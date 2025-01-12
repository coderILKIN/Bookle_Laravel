@extends('layouts.admin')

@section('title', 'Settings')


@section('content')


<div class="container-fluid">
    <h1 class="mb-4"><i class="bi bi-gear-fill"></i> Settings</h1>

    <!-- Navigation Tabs -->
    <ul class="nav nav-tabs" id="settingsTab">
        <li class="nav-item">
            <button class="nav-link active" data-target="images-section">
                <i class="bi bi-images"></i> Images
            </button>
        </li>
        <li class="nav-item">
            <button class="nav-link" data-target="contact-section">
                <i class="bi bi-envelope"></i> Contact Info
            </button>
        </li>
        <li class="nav-item">
            <button class="nav-link" data-target="social-section">
                <i class="bi bi-share"></i> Social Media
            </button>
        </li>
        <li class="nav-item">
            <button class="nav-link" data-target="other-section">
                <i class="bi bi-three-dots"></i> Others
            </button>
        </li>
    </ul>

    <form action="{{ route('admin.setting.update') }}" method="POST" enctype="multipart/form-data" class="mt-4">
        @csrf

        <!-- Images Section -->
        <div id="images-section" class="settings-section">
            <h3><i class="bi bi-image"></i> Images</h3>
            @foreach(['logo_image', 'slider_image', 'slider_image_two', 'breadcrump_image', 'breadcrump_image_two', 'banner_background_image', 'banner_image'] as $field)
            <div class="form-group">
                <label for="{{ $field }}">{{ ucwords(str_replace('_', ' ', $field)) }}</label>
                @if(isset($settings->$field))
                <div class="mb-3">
                    <img src="{{ Storage::url($settings->$field) }}" alt="{{ ucwords(str_replace('_', ' ', $field)) }}" class="img-thumbnail" style="width:100px">
                </div>
                @endif
                <input type="file" id="{{ $field }}" name="{{ $field }}" class="form-control">
                @error($field)
                <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            @endforeach
        </div>


        <!-- Contact Info Section -->
        <div id="contact-section" class="settings-section d-none">
            <h3><i class="bi bi-envelope"></i> Contact Info</h3>
            @foreach(['phone', 'email', 'location'] as $field)
            <div class="form-group">
                <label for="{{ $field }}">{{ ucwords($field) }}</label>
                <input type="text" id="{{ $field }}" name="{{ $field }}" class="form-control" value="{{ old($field, $settings->$field ?? '') }}">
                @error($field)
                <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            @endforeach
        </div>

        <!-- Social Media Section -->
        <div id="social-section" class="settings-section d-none">
            <h3><i class="bi bi-share"></i> Social Media</h3>
            @foreach(['twitter', 'facebook', 'youtube', 'linkedin', 'google_map'] as $field)
            <div class="form-group">
                <label for="{{ $field }}">{{ ucwords(str_replace('_', ' ', $field)) }}</label>
                <input type="text" id="{{ $field }}" name="{{ $field }}" class="form-control" value="{{ old($field, $settings->$field ?? '') }}">
                @error($field)
                <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            @endforeach
        </div>

        <!-- Other Section -->
        <div id="other-section" class="settings-section d-none">
            <h3><i class="bi bi-three-dots"></i> Other Data</h3>
            @foreach(['subtitle', 'title', 'description'] as $field)
            <div class="form-group">
                <label for="{{ $field }}">{{ ucwords($field) }}</label>
                @if($field === 'description')
                <textarea id="{{ $field }}" name="{{ $field }}" class="form-control">{{ old($field, $settings->$field ?? '') }}</textarea>
                @else
                <input type="text" id="{{ $field }}" name="{{ $field }}" class="form-control" value="{{ old($field, $settings->$field ?? '') }}">
                @endif
                @error($field)
                <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-success mt-3"><i class="bi bi-save"></i> Update Settings</button>
    </form>
</div>





@endsection



@section('customJs')


<script>
    document.querySelectorAll('#settingsTab .nav-link').forEach(tab => {
        tab.addEventListener('click', function() {
            document.querySelectorAll('.settings-section').forEach(section => section.classList.add('d-none'));
            document.querySelector(`#${this.dataset.target}`).classList.remove('d-none');
            document.querySelectorAll('#settingsTab .nav-link').forEach(nav => nav.classList.remove('active'));
            this.classList.add('active');
        });
    });
</script>




@endsection