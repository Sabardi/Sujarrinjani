@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Booking</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('bookings.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="kos_nama">Nama Kos</label>
                <input type="text" class="form-control form-control-lg" id="tours_id"
                    value="{{ $id->name }}" readonly>
                <input type="hidden" id="tours_id" name="tours_id" value="{{ $id->id }}">
            </div>


            <div class="form-group">
                <label for="fullName">Full Name:</label>
                <input type="text" class="form-control" id="fullName" name="fullName" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="pasport_number">Passport Number:</label>
                <input type="text" class="form-control" id="pasport_number" name="pasport_number" required>
            </div>

            <div class="form-group">
                <label for="nationality">Nationality:</label>
                <input type="text" class="form-control" id="nationality" name="nationality" required>
            </div>

            <div class="form-group">
                <label for="total_participan">Total Participants:</label>
                <input type="number" class="form-control" id="total_participan" name="total_participan" required>
            </div>

            <div class="form-group">
                <label for="arrival_date">Arrival Date:</label>
                <input type="date" class="form-control" id="arrival_date" name="arrival_date" required>
            </div>

            <div class="form-group">
                <label for="pickup_time">Pickup Time:</label>
                <input type="time" class="form-control" id="pickup_time" name="pickup_time" required>
            </div>

            <div class="form-group">
                <label for="pickup_location">Pickup Location:</label>
                <input type="text" class="form-control" id="pickup_location" name="pickup_location" required>
            </div>

            <div class="form-group">
                <label for="add_message">Additional Message:</label>
                <textarea class="form-control" id="add_message" name="add_message" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
