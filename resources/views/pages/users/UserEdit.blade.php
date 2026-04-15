@extends('master')

@section('content')

<form action="/user/{{ $user->id }}" method="POST">
    @csrf
    @method("put")
    <div class="container mt-5 d-flex justify-content-center">

        <div class="card form-card p-4" style="width: 500px;">

        <h3 class="fw-bold mb-4 text center text-success">Edit User</h3>
        
        <!-- Name -->
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="fia" name="name" value="{{ $user->name }}">
        <label for="floatingInput">Name</label>
    </div>

    <!-- Email -->
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="fia@example.com" name="email" value="{{ $user->email }}">
        <label for="floatingInput">Email</label>
    </div>

    <!-- Password -->
    <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingInput" placeholder="Password" name="password">
            <label for="floatingInput">Password</label>
    </div>

    <button type="submit" class="btn user-btn-create w-100">Update User</button>

        </div>
    </div>

</form>
@endsection