@extends('layouts.admin')

@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Author</h1>

    <form action="{{ route('admin.authors.update',['id' => $author->id] ) }}" method="POST" enctype="multipart/form-data">
        @csrf
       

        <!-- Image Field -->
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
            @if($author->image)
                <img src="{{ asset('storage/' . $author->image) }}" alt="Author Image" class="img-thumbnail mt-2" width="150">
            @endif
            @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Fullname Field -->
        <div class="mb-3">
            <label for="fullname" class="form-label">Full Name</label>
            <input type="text" name="fullname" class="form-control @error('fullname') is-invalid @enderror" id="fullname" value="{{ old('fullname', $author->fullname) }}" required>
            @error('fullname')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Country Field -->
        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input type="text" name="country" class="form-control @error('country') is-invalid @enderror" id="country" value="{{ old('country', $author->country) }}" required>
            @error('country')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- About Field -->
        <div class="mb-3">
            <label for="about" class="form-label">About</label>
            <textarea name="about" id="about" class="form-control @error('about') is-invalid @enderror" rows="5" required>{{ old('about', $author->about) }}</textarea>
            @error('about')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

       

        <!-- Submit Button -->
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.authors.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>

@endsection
