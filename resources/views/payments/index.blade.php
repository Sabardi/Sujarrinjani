@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Payment Methods</h1>
        <a href="{{ route('payments.create') }}" class="btn btn-primary">Create New Payment Method</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-3">
                {{ $message }}
            </div>
        @endif

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nasabah Name</th>
                    <th>Name</th>
                    <th>No Rekening</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payments as $payment)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $payment->nasabah_name }}</td>
                        <td>{{ $payment->name }}</td>
                        <td>{{ $payment->norek }}</td>
                        <td>
                            <a href="{{ route('payments.show', $payment->id) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('payments.edit', $payment->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('payments.destroy', $payment->id) }}" method="POST" style="display:inline-block;">
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
