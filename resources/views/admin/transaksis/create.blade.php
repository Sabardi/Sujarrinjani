@extends('layouts.app')

@section('content')
    <h1>Complete Your Payment</h1>

    <form action="{{ route('transaksi.store') }}" method="POST">
        @csrf
        <!-- Display booking details from the session -->
        <p>Tour: {{ session('booking_data.tours_id') }}</p>
        <p>Name: {{ session('booking_data.fullName') }}</p>
        <p>Email: {{ session('booking_data.email') }}</p>
        <!-- Other booking details -->

        <!-- Payment method -->
        <div>
            <label for="payment_id">Payment Method:</label>
            @foreach ($bayar as $p)
                <select name="payment_id" id="payment_id">
                    <option value="{{ $p->id }}">{{ $p->name }}</option>
                </select>
            @endforeach
        </div>
        <input type="hidden" name="bookings_id" id="bookings_id" value="{{ session('booking_data.bookings_id') }}">
        <input type="hidden" name="status" value="Paid">

        <button type="submit">Pay Now</button>
    </form>
@endsection
