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
                <input type="text" class="form-control" id="nasabah_name" name="nasabah_name"
                    value="{{ old('nasabah_name') }}" required>
                @error('nasabah_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                    required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="norek">No Rekening:</label>
                <input type="text" class="form-control" id="norek" name="norek" value="{{ old('norek') }}"
                    required>
                @error('norek')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
