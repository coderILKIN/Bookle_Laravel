@extends('layouts.admin')

{{--@section('title', 'Update Category')--}}

@section('content')

    <div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Category Update</h1>



        <form action="{{ route('admin.categories.update', ['id' => $category->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
       
            <!-- Name Input -->
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name"
                       class="form-control @error('name') is-invalid @enderror"
                       value="{{ old('name', $category->name) }}">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- Image Input -->
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" id="image"
                       class="form-control @error('image') is-invalid @enderror">
                <div class="mt-2">
                    @if ($category->image)
                        <img src="{{ Storage::url($category->image) }}" alt="Current Image" width="150">
                    @endif
                </div>
                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- Status Select -->
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status"
                        class="form-select @error('status') is-invalid @enderror">
                    <option value="1" {{ old('status', $category->status) == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status', $category->status) == 0 ? 'selected' : '' }}>Deactive</option>
                </select>
                @error('status')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

@endsection
