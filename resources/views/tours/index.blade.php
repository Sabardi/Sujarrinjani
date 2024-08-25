@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tour List</h1>
        <a href="{{ route('tours.create') }}" class="btn btn-primary">Create New Tour</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-3">
                {{ $message }}
            </div>
        @endif

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tours as $tour)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $tour->name }}</td>
                        <td>{{ $tour->description }}</td>
                        <td>{{ $tour->price }}</td>
                        <td>{{ $tour->kategori->name }}</td>
                        <td>{{ $tour->image }}</td>
                        <td>
                            <a href="{{ route('tours.show', $tour->id) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('tours.edit', $tour->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('tours.destroy', $tour->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
