@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Kategori List</h2>
    <a href="{{ route('kategori.create') }}" class="btn btn-primary mb-3">Create New Kategori</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($kategori as $item)
        <tr>
            <td>{{ ++$loop->index }}</td>
            <td>{{ $item->name }}</td>
            <td>
                <form action="{{ route('kategori.destroy', $item->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('kategori.show', $item->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('kategori.edit', $item->id) }}">Edit</a>
                    <a class="btn btn-secondary" href="{{ route('tours.filterByCategory',$item->id) }}">lihat detail</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
