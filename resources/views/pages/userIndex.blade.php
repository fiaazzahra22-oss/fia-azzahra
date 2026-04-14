@extends('master')

@section('content')

<div class="text-center mb-3">
    <h2>Daftar User</h2>
</div>

<div class="mb-3 text-center">
    <a href="{{ route('users.create') }}" class="btn btn-primary">Add User</a>
</div>

<table border="1" cellpadding="10" align="center">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($users as $user)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('users.edit', $user->id) }}">Edit</a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4" class="text-center">Data user belum ada</td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection