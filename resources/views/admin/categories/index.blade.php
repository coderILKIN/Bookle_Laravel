@extends('layouts.admin')

{{--@section('title', 'Cars')--}}

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Categories List</h1>

    <div class="card-header py-3">
        <a href="{{route('admin.categories.create')}}" class="btn btn-info">@lang('create')</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <!-- <th>Slug</th> -->
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)

            <tr>
                <td>
                    <img src="{{ Storage::url($category->image) }}" alt="categorie_img" width="100">


                </td>
                <td>{{$category->name}}</td>




                <td>
                    @if($category->status)
                    <span style="color: green; font-weight: bold;">Available</span>
                    @else
                    <span style="color: red; font-weight: bold;">Not Available</span>
                    @endif
                </td>

                <td>
                    <a href="{{route('admin.categories.edit', ['id' => $category->id])}}" class="btn btn-info">Edit</a>
                    <a href="{{route('admin.categories.destroy', ['id' => $category->id])}}" class="btn btn-danger" onclick="confirm('Are you sure to Delete?')">Delete</a>
                </td>


            </tr>

            @endforeach

        </tbody>
    </table>



</div>


@endsection