@extends('layout.app')

@section('content')
    <div class="container">
        <h1>Tour Details</h1>

        <div class="form-group">
            <strong>Name:</strong>
            {{ $tour->name }}
        </div>

        <div class="form-group">
            <strong>Description:</strong>
            {{ $tour->description }}
        </div>

        <div class="form-group">
            <strong>Price:</strong>
            {{ $tour->price }}
        </div>

        <div class="form-group">
            <strong>Category:</strong>
            {{ $tour->kategori->name }}
        </div>

        <div class="form-group">
            <strong>Image:</strong>
            {{ $tour->image }}
        </div>

        <a href="{{ route('tours.index') }}" class="btn btn-primary">Back</a>
        <a href="{{ route('bookings.create', $tour->id) }}" class="btn btn-primary">booking</a>
    </div>
@endsection
