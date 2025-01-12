@extends('layouts.admin')

@section('title', 'Authors')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Authors List</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        
        <div class="card-header py-3">
            <a href="{{route('admin.authors.create')}}" class="btn btn-info">@lang('create')</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Fullname</th>
                            <th>Country</th>
                            <th>About</th>

                        </tr>
                    </thead>

                    <tbody>

                        @foreach($authors as $author)

                        <tr>
                            <td>
                                <img src="{{Storage::url($author->image)}}" alt="author_img" width="100">
                            </td>
                            <td>{{$author->fullname}}</td>

                            <td>{{$author->country}}</td>
                            <td>{{$author->about}}</td>
                          

                            <td>
                                <a href="{{route('admin.authors.edit', ['id' => $author->id])}}" class="btn btn-info">Edit</a>
                                <a href="{{route('admin.authors.destroy', ['id' => $author->id])}}" class="btn btn-danger" onclick="confirm('Are you sure to Delete?')">Delete</a>
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