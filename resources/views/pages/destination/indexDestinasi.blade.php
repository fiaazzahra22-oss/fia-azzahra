@extends("master")

@section('content')

<div class="container mt-4">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h2 class="mb-0">Destinasi</h2>
            <a href="{{ route('destinations.create') }}" class="btn btn-light text-primary">Add Destination</a>
        </div>
        <div class="card-body">
            <form action="{{{route ('destinations.index')}}}" method="GET" class="mb-3">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search destinations..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </div>
            </form>

       

            <div class="table-responsive">
                <div class="mt-3 d-flex justify-content-center">
                    {{ $destinations->links('pagination::bootstrap-5') }}
                </div>

                <table class="table table-striped table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Location</th>
                            <th>Price</th>
                            <th>Working Hours</th>
                            <th>Working Days</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($destinations as $destination)
                            <tr>
                                <td><a href="{{route("destinations.edit", $destination->id) }}" class="text-decoration-none">{{ $destinations->firstItem() ? $destinations->firstItem() + $loop->index : $loop->iteration }}</a></td>
                                <td>{{ $destination->name }}</td>
                                <td>{{ $destination->description }}</td>
                                <td>{{ $destination->location }}</td>
                                <td>{{ $destination->ticket_price }}</td>
                                <td>{{ $destination->working_hours }}</td>
                                <td>{{ $destination->working_days }}</td>
                                <td>
                                    <a href="{{ route('destinations.edit', $destination->id) }}" class="btn btn-warning btn-sm me-1">Edit</a>
                                    <form action="{{ route('destinations.destroy', $destination->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete {{ $destination->name }}?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    let alertElement = document.querySelector('.alert');
    if (alertElement) {
        setTimeout(() => {
            alertElement.style.transition = "opacity 0.5s ease-out";
            alertElement.style.opacity = "0";
            setTimeout(() => {
                alertElement.remove();
            }, 500);
        }, 3000);
    }
</script>
@endpush