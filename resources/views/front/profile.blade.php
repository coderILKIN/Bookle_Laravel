@extends('layouts.app')


@section('content')




<section class="ftco-section contact-section mt-5 mb-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 text-center">
        <h2 class="mb-4">Profile Page</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8 col-sm-10 card p-4 shadow">
        <div class="mb-4 text-center">
          <img src="{{ Storage::url($user->avatar) }}" 
               alt="{{$user->name}}" 
               class="rounded-circle img-fluid border" 
               style="width: 120px; height: 120px;">
        </div>
        <div class="mb-3 text-center">
          <h4 class="text-primary">Hello, {{$user->name}}</h4>
        </div>

        <!-- Update Form -->
        <form action="{{route('app.profileUpdate')}}" method="POST" enctype="multipart/form-data">
          @csrf
          

          <!-- Name -->
          <div class="form-group mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
          </div>

          <!-- Email -->
          <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
          </div>

          <!-- Phone -->
          <div class="form-group mb-3">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
          </div>

          <!-- Avatar -->
          <div class="form-group mb-3">
            <label for="avatar">Avatar</label>
            <input type="file" class="form-control" id="avatar" name="avatar">
          </div>

          <!-- Password -->
          <div class="form-group mb-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>

          <!-- Submit Button -->
          <div class="form-group text-center mt-4">
            <button type="submit" class="btn btn-primary px-4 py-2">
              Update Profile
            </button>
          </div>
        </form>

        <div class="text-center mt-3">
          <a href="{{ route('app.logout') }}" class="btn btn-danger px-4 py-2">Logout</a>
        </div>
      </div>
    </div>
  </div>
</section>








@endsection