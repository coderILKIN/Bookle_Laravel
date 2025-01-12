<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Profile</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        .rounded-circle {
            width: 120px;
            height: 120px;
            object-fit: cover;
        }

        .navbar {
            background-color: #007bff;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.25rem;
        }

        .footer {
            background-color: #343a40;
            color: white;
        }

        .footer a {
            color: white;
        }

        .footer a:hover {
            text-decoration: none;
        }

        .card-header {
            background-color: #f1f1f1;
            font-size: 1.25rem;
        }

        .form-group label {
            font-weight: bold;
        }
    </style>
</head>

<body>
<!-- Header -->


<!-- Main content -->
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <!-- Profile section -->
            <div class="card shadow">
                <div class="card-header text-center">
                    <h4 class="mb-0">Admin Profile</h4>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{ Storage::url($user->avatar) }}" alt="{{$user->name}}"
                             class="rounded-circle img-fluid border">
                    </div>
                    <div class="text-center mt-3">
                        <h4 class="text-primary">Hello, {{$user->name}}</h4>
                    </div>

                    <!-- Update Form -->
                    <form action="{{route('app.profileUpdate')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Name -->
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                        </div>

                        <!-- Phone -->
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
                        </div>

                        <!-- Avatar -->
                        <div class="form-group">
                            <label for="avatar">Avatar</label>
                            <input type="file" class="form-control" id="avatar" name="avatar">
                        </div>

                        <!-- Password -->
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </div>
                    </form>
                </div>

                <div class="card-footer text-center">
                    <a href="{{ route('app.logout') }}" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Bootstrap JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
