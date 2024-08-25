@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Bookings</h1>

        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-3">
                {{ $message }}
            </div>
        @endif

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tour</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Passport Number</th>
                    <th>Nationality</th>
                    <th>Total Participants</th>
                    <th>Arrival Date</th>
                    <th>Pickup Time</th>
                    <th>Pickup Location</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $booking->tour->name }}</td>
                        <td>{{ $booking->fullName }}</td>
                        <td>{{ $booking->email }}</td>
                        <td>{{ $booking->pasport_number }}</td>
                        <td>{{ $booking->nationality }}</td>
                        <td>{{ $booking->total_participan }}</td>
                        <td>{{ $booking->arrival_date }}</td>
                        <td>{{ $booking->pickup_time}}</td>
                        <td>{{ $booking->pickup_location }}</td>
                        <td>
                            <a href="{{ route('bookings.show', $booking->id) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" style="display:inline-block;">
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
