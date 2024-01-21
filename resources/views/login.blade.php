@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Include Bootstrap CSS (you may need to adjust the path) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body> 
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Registration</h2>
                <form action="{{ route('employee.storer_reg') }}" method="POST" class="was-validated" novalidate>
                @csrf
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="name" aria-describedby="usernameHelp" placeholder="Enter your username">
                    <small id="usernameHelp" class="form-text text-muted">Choose a unique username.</small>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="address" aria-describedby="emailHelp" placeholder="Enter your email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="phone" name="password" placeholder="Enter your password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="agreeCheck" name="agreeCheck">
                    <label class="form-check-label" for="agreeCheck">I agree to the terms and conditions</label>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>

            </div>
        </div>
    </div>

   
</body>
</html>
@endsection
