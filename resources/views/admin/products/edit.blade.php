@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Product Update</h1>
    <form action="{{ route('admin.products.update', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
      

        <!-- Category Selection -->
        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select name="category_id" class="form-control @error('category_id') is-invalid @enderror" id="category_id" required>
                <option value="">Select a Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Existing Image -->
        <div class="mb-3">
            <label for="current_image" class="form-label">Current Image</label><br>
            <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" width="100">
        </div>

        <!-- New Image Upload -->
        <div class="mb-3">
            <label for="image" class="form-label">New Image (Optional)</label>
            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
            @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


         <!-- Author Selection -->
         <div class="mb-3">
            <label for="author_id" class="form-label">Author</label>
            <select name="author_id" class="form-control @error('author_id') is-invalid @enderror" id="author_id" required>
                <option value="">Select an Author</option>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}" {{ $product->author_id == $author->id ? 'selected' : '' }}>
                        {{ $author->fullname }}
                    </option>
                @endforeach
            </select>
            @error('author_id')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Name Field -->
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ $product->name }}">
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Description Field -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="3">{{ $product->description }}</textarea>
            @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Price Field -->
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" id="price" value="{{ $product->price }}" min="0" step="0.01">
            @error('price')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- SKU Field -->
        <div class="mb-3">
            <label for="sku" class="form-label">SKU</label>
            <input type="text" name="sku" class="form-control @error('sku') is-invalid @enderror" id="sku" value="{{ $product->sku }}">
            @error('sku')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Total Page Field -->
        <div class="mb-3">
            <label for="total_page" class="form-label">Total Pages</label>
            <input type="number" name="total_page" class="form-control @error('total_page') is-invalid @enderror" id="total_page" value="{{ $product->total_page }}" min="1">
            @error('total_page')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Publish Years Field -->
        <div class="mb-3">
            <label for="publish_years" class="form-label">Publish Year</label>
            <input type="number" name="publish_years" class="form-control @error('publish_years') is-invalid @enderror" id="publish_years" value="{{ $product->publish_years }}" min="1900" max="{{ date('Y') }}">
            @error('publish_years')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Language Field -->
        <div class="mb-3">
            <label for="language" class="form-label">Language</label>
            <input type="text" name="language" class="form-control @error('language') is-invalid @enderror" id="language" value="{{ $product->language }}">
            @error('language')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Country Field -->
        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input type="text" name="country" class="form-control @error('country') is-invalid @enderror" id="country" value="{{ $product->country }}">
            @error('country')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Status Field -->
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-control @error('status') is-invalid @enderror" id="status">
                <option value="1" {{ $product->status == '1' ? 'selected' : '' }}>Available</option>
                <option value="0" {{ $product->status == '0' ? 'selected' : '' }}>Not Available</option>
            </select>
            @error('status')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
