@extends('master')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0">{{ $destination->name }}</h2>
        </div>
        <div class="card-body">
            <p class="card-text">{{ $destination->description }}</p>
            <div class="row gy-2">
                <div class="col-md-6">
                    <strong>Location</strong>
                    <div>{{ $destination->location }}</div>
                </div>
                <div class="col-md-6">
                    <strong>Ticket Price</strong>
                    <div>{{ $destination->ticket_price }}</div>
                </div>
                <div class="col-md-6">
                    <strong>Working Days</strong>
                    <div>{{ $destination->working_days }}</div>
                </div>
                <div class="col-md-6">
                    <strong>Working Hours</strong>
                    <div>{{ $destination->working_hours }}</div>
                </div>
            </div>
        </div>
        <div class="card-footer text-end">
            <a href="/destinations" class="btn btn-secondary">Back to Destinations</a>
        </div>
    </div>
</div>
@endsection