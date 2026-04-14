@extends('master')

@section('content')

<form action="/user/{{ $user->id }}/update" method="post" class="form-floating">
    @csrf
    @method("put")
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="fia" name="name" value="{{ $user->name }}">
        <label for="floatingInput">Name</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="fia@example.com" name="email" value="{{ $user->email }}">
        <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingInput" placeholder="Password" name="password">
            <label for="floatingInput">Password</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button> 

</form>
@endsection