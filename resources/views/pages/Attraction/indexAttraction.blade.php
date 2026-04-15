@extends('master')

@section('content')
<div class="container py-4">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-4 gap-3">
        <div>
            <h2 class="fw-bold mb-0">Attraction</h2>
        </div>
        
        <div class="d-flex gap-2">
            <form method="GET" class="d-flex shadow-sm">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search attraction..." value="{{ request('search') }}">
                    <button class="btn btn-outline-primary" type="submit">
                        <i class="bi bi-search"></i> Search
                    </button>
                </div>
            </form>
            
            <a href="{{ route('attraction.create') }}" class="btn btn-primary shadow-sm">
                <i class="bi bi-plus-lg"></i> Add attraction
            </a>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4">No</th>
                            <th>User Info</th>
                            <th>Email</th>
                            <th class="text-end pe-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($attractions as $index => $attraction)
                        <tr>
                            <td class="ps-4 text-muted">
                                {{ $loop->iteration }}
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="bg-light rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                        <span class="fw-bold text-primary">{{ strtoupper(substr($attraction->name, 0, 1)) }}</span>
                                    </div>
                                    <div>
                                        <div class="fw-bold text-dark">{{ $attraction->name }}</div>
                                        <small class="text-muted text-uppercase" style="font-size: 0.7rem;">ID: #{{ $attraction->id }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="text-secondary">{{ $attraction->email }}</span>
                            </td>
                            <td class="text-end pe-4">
                                <div class="btn-group" role="group">
                                    <a href="/attraction/{{ $attraction->id }}/edit" class="btn btn-outline-warning btn-sm">
                                        Edit
                                    </a>
                                    <form action="/attraction/{{ $attraction->id }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?')">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center py-5 text-muted">
                                No attraction found.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    
@endsection