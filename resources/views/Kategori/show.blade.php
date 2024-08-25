@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Show Kategori</h2>

    <div class="form-group">
        <strong>Name:</strong>
        {{ $kategori->name }}
    </div>

    <a href="{{ route('kategori.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection
