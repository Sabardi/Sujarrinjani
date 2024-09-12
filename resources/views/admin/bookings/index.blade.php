@extends('admin.layouts.app')
@section('Booking', 'active')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="mb-3 fw-bold">Kategori</h3>
                <ul class="mb-3 breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Toures</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Kategori</a>
                    </li>
                </ul>
            </div>

            @if ($message = Session::get('success'))
                <div class="mt-3 alert alert-success">
                    {{ $message }}
                </div>
            @endif

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="table display table-striped table-hover">
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
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
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
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </tfoot>

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
                                                <td>{{ $booking->pickup_time }}</td>
                                                <td>{{ $booking->pickup_location }}</td>
                                                <td>
                                                    <a href="{{ route('bookings.show', $booking->id) }}"
                                                        class="btn btn-info">Show</a>
                                                    <a href="{{ route('bookings.edit', $booking->id) }}"
                                                        class="btn btn-warning">Edit</a>
                                                    <form action="{{ route('bookings.destroy', $booking->id) }}"
                                                        method="POST" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Are you sure?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
