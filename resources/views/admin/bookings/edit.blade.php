@extends('layout.app')


@section('content')
    <div class="container">
        <h1>Edit Booking</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('bookings.update', $booking->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="tours_id">Tour:</label>
                <select class="form-control" id="tours_id" name="tours_id" required>
                    @foreach ($tours as $tour)
                        <option value="{{ $tour->id }}" {{ $booking->tours_id == $tour->id ? 'selected' : '' }}>{{ $tour->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="fullName">Full Name:</label>
                <input type="text" class="form-control" id="fullName" name="fullName" value="{{ $booking->fullName }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $booking->email }}" required>
            </div>

            <div class="form-group">
                <label for="pasport_number">Passport Number:</label>
                <input type="text" class="form-control" id="pasport_number" name="pasport_number" value="{{ $booking->pasport_number }}" required>
            </div>

            <div class="form-group">
                <label for="nationality">Nationality:</label>
                <input type="text" class="form-control" id="nationality" name="nationality" value="{{ $booking->nationality }}" required>
            </div>

            <div class="form-group">
                <label for="total_participan">Total Participants:</label>
                <input type="number" class="form-control" id="total_participan" name="total_participan" value="{{ $booking->total_participan }}" required>
            </div>

            <div class="form-group">
                <label for="arrival_date">Arrival Date:</label>
                <input type="date" class="form-control" id="arrival_date" name="arrival_date" value="{{ $booking->arrival_date }}" required>
            </div>

            <div class="form-group">
                <label for="pickup_time">Pickup Time:</label>
                <input type="time" class="form-control" id="pickup_time" name="pickup_time" value="{{ $booking->pickup_time }}" required>
            </div>

            <div class="form-group">
                <label for="pickup_location">Pickup Location:</label>
                <input type="text" class="form-control" id="pickup_location" name="pickup_location" value="{{ $booking->pickup_location }}" required>
            </div>

            <div class="form-group">
                <label for="add_message">Additional Message:</label>
                <textarea class="form-control" id="add_message" name="add_message" rows="3">{{ $booking->add_message }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
