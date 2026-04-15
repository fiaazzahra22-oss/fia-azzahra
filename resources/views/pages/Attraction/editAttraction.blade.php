@extends('master')

@section('content')
    
<form action="/Attraction/{{ $attraction->id }}/update" method="POST">
    @csrf @method('PUT') <label>Nama Kategori</label>
    <input type="text" name="name" value="{{ $attraction->name }}" required>
    <input type="text" name="description" value="{{ $attraction->description }}" required>

    <button type="submit">Update</button>
</form>
@endsection</section>