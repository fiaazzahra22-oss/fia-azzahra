@extends('master')

@section('content')
    
<div class="container mt-5 d-flex justify-content-center">

        <div class="card shadow-lg p-4 border-0" style="width: 400px;">

            <h3 class="fw-bold mb-4 text-center text-success">
                Add attraction
            </h3>

            <!-- Name -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" placeholder="fia">
                <label>Name</label>
            </div>

            <!-- Email -->
            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" placeholder="fia@example.com">
                <label>Email</label>
            </div>

            <!-- Password -->
            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <label>Password</label>
            </div>

            <button type="submit" class="btn btn-success w-100">Add attraction</button>
        </div>

    </div>
@endsection