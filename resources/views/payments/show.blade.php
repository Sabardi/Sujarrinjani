@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Payment Method Details</h1>

        <div class="form-group">
            <strong>Nasabah Name:</strong>
            {{ $payment->nasabah_name }}
        </div>

        <div class="form-group">
            <strong>Name:</strong>
            {{ $payment->name }}
        </div>

        <div class="form-group">
            <strong>No Rekening:</strong>
            {{ $payment->norek }}
        </div>

        <a href="{{ route('payments.index') }}" class="btn btn-primary">Back</a>
    </div>
@endsection
