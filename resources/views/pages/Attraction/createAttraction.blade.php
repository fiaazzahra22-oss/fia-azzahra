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

<div class="col-12">
    <label for="name" class="form-label">Name</label>
    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
    @error('name')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
        
<div class="container mt-5 d-flex justify-content-center">
    <div class="card shadow-lg p-4 border-0" style="width: 500px;">
        <h3 class="fw-bold mb-4 text-center text-success">Add Attraction</h3>

        <form action="{{ route('attraction.store') }}" method="POST">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" id="name" placeholder="Nama Tempat" required>
                <label for="name">Name</label>
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control" name="description" id="description" style="height: 120px" placeholder="Deskripsi" ></textarea>
                <label for="description">Description</label>
            </div>

            <button type="submit" class="btn btn-success w-100">Save Attraction</button>
        </form>
    </div>
</div>

<div class="col-12">
    <label for="destination_id" class="form-label">Destination</table>
        <select id="destination_id" name="destination_id" class="form-control @error ('destination_id') id-invalid @enderror" required>
            <option values="">Select Destination</option>
            @foreach ($destinations as $destination)
            <option value="{{ $destination->id }}" {{old('destination_id') == $destination->id ? 'selected' : '' }}>
                {{ $destination->name }}
            </option>
            @endforeach
        </select>
        @error('destination_id')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
</div>

@endsection