@extends('master')

@section('content')

<div class="col-12">
    <label for="name" class="form-label">Name</label>
    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
    @error('name')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<form action="{{ route('attraction.update', $attraction->id) }}" method="POST">
    @csrf
    @method("PUT")
    
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card form-card p-4" style="width: 500px;">

            <h3 class="fw-bold mb-4 text-center text-success">Edit Attraction</h3>
            
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="name" placeholder="Nama Atraksi" name="name" value="{{ $attraction->name }}" required>
                <label for="name">Name</label>
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control" id="description" placeholder="Deskripsi" name="description" style="height: 100px" required>{{ $attraction->description }}</textarea>
                <label for="description">Description</label>
            </div>

            <button type="submit" class="btn user-btn-create w-100">Update Attraction</button>

        </div>
    </div>

</form>

@endsection