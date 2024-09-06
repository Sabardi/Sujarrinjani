@extends('admin.layouts.app')
@section('Toures', 'active')
@section('content')
    {{-- @if (Auth::user()->role === 'contentmanager') --}}
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="mb-3 fw-bold">Artikel</h3>
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
                        <a href="#">Artikel</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Artikel</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                {{-- <h4 class="card-title">Add Row</h4> --}}
                                <a href="{{ route('artikels.create') }}" class="btn btn-primary btn-round ms-auto">
                                    <i class="fa fa-plus"></i>
                                    Add Artikel
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="table display table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Quote</th>
                                            <th>judul</th>
                                            <th>Itinerary</th>
                                            <th>Gambar Hari 1</th>
                                            <th>Gambar Hari 2</th>
                                            <th>Gambar Hari 3</th>
                                            <th>Gambar Hari 4</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Quote</th>
                                            <th>judul</th>
                                            <th>Itinerary</th>
                                            <th>Gambar Hari 1</th>
                                            <th>Gambar Hari 2</th>
                                            <th>Gambar Hari 3</th>
                                            <th>Gambar Hari 4</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </tfoot>

                                    <tbody>
                                        @foreach ($artikels as $artikel)
                                            <tr>
                                                <td>{{ $artikel->id }}</td>
                                                <td>{{ $artikel->quote }}</td>
                                                <td>{{ $artikel->tour->name }}</td>
                                                <td>{{ $artikel->itinerary }}</td>
                                                <td><img src="{{ asset($artikel->day1_image) }}" alt="Day 1 Image"
                                                        width="100"></td>
                                                <td><img src="{{ asset($artikel->day2_image) }}" alt="Day 2 Image"
                                                        width="100"></td>
                                                <td><img src="{{ asset($artikel->day3_image) }}" alt="Day 3 Image"
                                                        width="100"></td>
                                                <td><img src="{{ asset($artikel->day4_image) }}" alt="Day 4 Image"
                                                        width="100"></td>

                                                <td>
                                                    <div class="form-button-action">
                                                        <a href="{{ route('artikels.edit', $artikel->id) }}" class="btn btn-link btn-warning btn-lg">
                                                            <i class="fa fa-edit"></i>
                                                        </a>

                                                        <a href="{{ route('artikels.show', $artikel->id) }}"
                                                            class="btn btn-link btn-info btn-lg"> <i><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                                                    <path
                                                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                                                                </svg>
                                                            </i>
                                                        </a>

                                                        <form action="{{ route('artikels.destroy', $artikel->id) }}"
                                                            method="POST" style="display:inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-link btn-danger"
                                                                onclick="return confirm('Yakin ingin menghapus?')">
                                                                <i>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-trash3" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                                                                    </svg>
                                                                </i>
                                                            </button>
                                                        </form>
                                                    </div>
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
    {{-- @else
        @php
            abort(403, 'Forbidden');
        @endphp
    @endif --}}
@endsection
