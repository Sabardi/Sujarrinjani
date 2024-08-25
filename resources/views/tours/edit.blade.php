@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Tour</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
            </div>
        @endif

        <form action="{{ route('tours.update', $tour->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $tour->name }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description">{{ $tour->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $tour->price }}" required>
            </div>

            <div class="form-group">
                <label for="kategori_id">Category:</label>
                <input type="text" class="form-control" id="kategori_id" name="kategori_id" value="{{ $tour->kategori_id }}" required>
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ $tour->image }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
