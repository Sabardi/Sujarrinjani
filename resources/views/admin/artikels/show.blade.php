@extends('layout.app')

@section('content')
    <div class="container">
        <h1>{{ $artikel->quote }}</h1>

        <div class="mb-4">
            <strong>Itinerary:</strong> {{ $artikel->itinerary }}
        </div>

        <div class="mb-4">
            <h3>Day 1</h3>
            @if ($artikel->day1_image)
                <img src="{{ asset($artikel->day1_image) }}" alt="Day 1 Image" class="img-fluid">
            @endif
            <p>{{ $artikel->paragrap1_day1 }}</p>
            <p>{{ $artikel->paragrap2_day1 }}</p>
        </div>

        <div class="mb-4">
            <h3>Day 2</h3>
            @if ($artikel->day2_image)
                <img src="{{ asset($artikel->day2_image) }}" alt="Day 2 Image" class="img-fluid">
            @endif
            <p>{{ $artikel->paragrap1_day2 }}</p>
            <p>{{ $artikel->paragrap2_day2 }}</p>
        </div>

        <div class="mb-4">
            <h3>Day 3</h3>
            @if ($artikel->day3_image)
                <img src="{{ asset($artikel->day3_image) }}" alt="Day 3 Image" class="img-fluid">
            @endif
            <p>{{ $artikel->paragrap1_day3 }}</p>
            <p>{{ $artikel->paragrap2_day3 }}</p>
        </div>

        <div class="mb-4">
            <h3>Day 4</h3>
            @if ($artikel->day4_image)
                <img src="{{ asset($artikel->day4_image) }}" alt="Day 4 Image" class="img-fluid">
            @endif
            <p>{{ $artikel->paragrap1_day4 }}</p>
            <p>{{ $artikel->paragrap2_day4 }}</p>
        </div>

        <a href="{{ route('artikels.index') }}" class="btn btn-primary">Back to List</a>
    </div>
@endsection
