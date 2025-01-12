@extends('layouts.admin')

@section('title', 'Products')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Products List</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        
        <div class="card-header py-3">
            <a href="{{route('admin.products.create')}}" class="btn btn-info">@lang('create')</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Total Page</th>
                            <th>Language</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>

                        @foreach($products as $product)

                        <tr>
                            <td>
                                <img src="{{Storage::url($product->image)}}" alt="product_img" width="100">
                            </td>
                            <td>{{$product->name}}</td>

                            <td>{{$product->category->name}}</td>
                            <td>{{$product->author->fullname}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->price}} AZN</td>
                            <td>{{$product->total_page}}</td>
                            <td>{{$product->language}}</td>

                            <td>
                                @if($product->status)
                                <span style="color: green; font-weight: bold;">Available</span>
                                @else
                                <span style="color: red; font-weight: bold;">Not Available</span>
                                @endif
                            </td>

                            <td>
                                <a href="{{route('admin.products.edit', ['id' => $product->id])}}" class="btn btn-info">Edit</a>
                                <a href="{{route('admin.products.destroy', ['id' => $product->id])}}" class="btn btn-danger" onclick="confirm('Are you sure to Delete?')">Delete</a>
                            </td>


                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection