@extends('master')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
    <ul class="mb-0">
        @foreach (@errors->all() as $errors)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
@endif

<form action="{{ route('destination.create') }}" method="post" class="form-floating">
    @csrf
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="name" placeholder="Asia Heritage" name="name">
        <label for="name">Nama Destinasi</label>
    </div>
    <div class="form-floating mb-3">
        <textarea name="description" id="description" class="form-control" placeholder="Deskripsi destinasi"></textarea>
        <label for="description">Deskripsi</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="location" placeholder="Pekanbaru" name="location">
        <label for="location">Lokasi</label>
    </div>
    <div class="form-floating mb-3">
        <input type="number" class="form-control" id="ticket_price" placeholder="100000" name="ticket_price">
        <label for="ticket_price">Harga Tiket</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="working_hours" placeholder="08.00-17.00" name="working_hours">
        <label for="working_hours">Jam Operasional</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="working_days" placeholder="Setiap Hari" name="working_days">
        <label for="working_days">Hari Operasional</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection