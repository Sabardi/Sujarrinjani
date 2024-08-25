@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Payment Method</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('payments.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nasabah_name">Nasabah Name:</label>
                <input type="text" class="form-control" id="nasabah_name" name="nasabah_name" required>
            </div>

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="norek">No Rekening:</label>
                <input type="number" class="form-control" id="norek" name="norek" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
