@extends("master")

@section('content')
<a href="/destinations/create" class="btn btn-success"><button>Add Destination</button></a>
<div class="container">
    <table class="table table-striped-colums">
        <thead>
            <tr>
                <th>ID</th>
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
                    <td><a href="/detaildestinasi/{{ $destination->id }}">{{ $destination->id }}</a></td>
                    <td>{{ $destination->name }}</td>
                    <td>{{ $destination->description }}</td>
                    <td>{{ $destination->location }}</td>
                    <td>{{ $destination->ticket_price }}</td>
                    <td>{{ $destination->working_hours }}</td>
                    <td>{{ $destination->working_days }}</td>
                    <td>
                        <form action="/destination/{{ $destination->id }}" method="post" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('are you sure to delete {{ $destination->name }}?')">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="/destinations/{{ $destination->id }}/edit" class="btn btn-warning">Edit</a>
                        <form action="/destination/{{ $destination->id }}" method="post" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('are you sure to delete {{ $destination->name }}?')">Delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection</section>