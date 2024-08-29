@extends('layout.app')

@section('content')
    <div class="container">
        <h1>Booking Details</h1>

        <div class="form-group">
            <strong>Tour:</strong>
            {{ $booking->tour->name }}
        </div>

        <div class="form-group">
            <strong>Full Name:</strong>
            {{ $booking->fullName }}
        </div>

        <div class="form-group">
            <strong>Email:</strong>
            {{ $booking->email }}
        </div>

        <div class="form-group">
            <strong>Passport Number:</strong>
            {{ $booking->pasport_number }}
        </div>

        <div class="form-group">
            <strong>Nationality:</strong>
            {{ $booking->nationality }}
        </div>

        <div class="form-group">
            <strong>Total Participants:</strong>
            {{ $booking->total_participan }}
        </div>

        <div class="form-group">
            <strong>Arrival Date:</strong>
            {{ $booking->arrival_date }}
        </div>

        <div class="form-group">
            <strong>Pickup Time:</strong>
            {{ $booking->pickup_time }}
        </div>

        <div class="form-group">
            <strong>Pickup Location:</strong>
            {{ $booking->pickup_location }}
        </div>

        <div class="form-group">
            <strong>Additional Message:</strong>
            {{ $booking->add_message }}
        </div>

        <a href="{{ route('bookings.index') }}" class="btn btn-primary">Back</a>
    </div>
@endsection
