@extends('admin.layouts.app')
@section('Toures', 'active')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($message = Session::get('success'))
        <div class="mt-3 alert alert-success">
            {{ $message }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif


    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                {{-- <h3 class="mb-3 fw-bold">Tour</h3> --}}
                <ul class="mb-3 breadcrumbs">
                    <li class="nav-home">
                        <a href="{{ route('dashboard') }}">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('artikels.index') }}">Artikel</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Artikle</a>
                    </li>
                </ul>
            </div>

            <div class="container">
                <h1>Buat Artikel Baru</h1>
                <form action="{{ route('artikels.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Tour ID -->
                    <div class="form-group">
                        <label for="tours_id">Tour:</label>
                        <select class="form-control" name="tours_id" id="tours_id">
                            @foreach ($tours as $k)
                                <option value="{{ $k->id }}" {{ old('tours_id') == $k->id ? 'selected' : '' }}>
                                    {{ $k->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('kategori_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Quote -->
                    <div class="form-group">
                        <label class="floatingTextarea2" for="quote">Quote:</label>
                        <textarea class="form-control" name="quote" id="quote" cols="30" rows="10"></textarea>
                        {{-- <input type="text" class="form-control" id="quote" name="quote"> --}}
                        @error('quote')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Itinerary -->
                    <div class="form-group">
                        <label for="itinerary">Itinerary:</label>
                        <textarea class="form-control" name="itinerary" id="itinerary" cols="30" rows="10"></textarea>
                        {{-- <input type="text" class="form-control" id="itinerary" name="itinerary"> --}}
                        @error('itinerary')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-center">
                        <b>Hari Pertama</b>
                    </div>
                    <!-- Paragraphs for Day 1 -->
                    <div class="form-group">
                        <label for="paragrap1_day1">Paragraf 1:</label>
                        <textarea class="form-control" name="paragrap1_day1" id="paragrap1_day1" cols="30" rows="10"></textarea>
                        {{-- <input type="text" class="form-control" id="paragrap1_day1" name="paragrap1_day1"> --}}
                        @error('paragrap1_day1')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="paragrap2_day1">Paragraf 2:</label>
                        <textarea class="form-control" name="paragrap2_day1" id="paragrap2_day1" cols="30" rows="10"></textarea>
                        {{-- <input type="text" class="form-control" id="paragrap2_day1" name="paragrap2_day1"> --}}
                        @error('paragrap2_day1')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="day1_image">Gambar: perlu di isi</label>
                        <input type="file" class="form-control" id="day1_image" name="day1_image">
                        @error('day1_image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Paragraphs for Day 2 -->
                    <div class="text-center">
                        <b>Hari kedua</b>
                    </div>
                    <div class="form-group">
                        <label for="paragrap1_day2">Paragraf 1 :</label>
                        <textarea class="form-control" name="paragrap1_day2" id="paragrap1_day2" cols="30" rows="10"></textarea>
                        {{-- <input type="text" class="form-control" id="paragrap1_day2" name="paragrap1_day2"> --}}
                        @error('paragrap1_day2')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="paragrap2_day2">Paragraf 2:</label>
                        <textarea class="form-control" name="paragrap2_day2" id="paragrap2_day2" cols="30" rows="10"></textarea>
                        {{-- <input type="text" class="form-control" id="paragrap2_day2" name="paragrap2_day2"> --}}
                        @error('paragrap2_day2')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="day2_image">Gambar: bisa tidak di isi jika tidak ada</label>
                        <input type="file" class="form-control" id="day2_image" name="day2_image">
                        @error('day2_image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Paragraphs for Day 3 -->
                    <div class="text-center">
                        <b>Hari ketiga</b>
                    </div>
                    <div class="form-group">
                        <label for="paragrap1_day3">Paragraf 1 : bisa tidak di isi jika tidak ada</label>
                        <textarea class="form-control" name="paragrap1_day3" id="paragrap1_day3" cols="30" rows="10"></textarea>
                        {{-- <input type="text" class="form-control" id="paragrap1_day3" name="paragrap1_day3"> --}}
                        @error('paragrap1_day3')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="paragrap2_day3">Paragraf 2 bisa tidak di isi jika tidak ada:</label>
                        <textarea class="form-control" name="paragrap2_day3" id="paragrap2_day3" cols="30" rows="10"></textarea>
                        {{-- <input type="text" class="form-control" id="paragrap2_day3" name="paragrap2_day3"> --}}
                        @error('paragrap2_day3')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="day3_image">Gambar : bisa tidak di isi jika tidak ada</label>
                        <input type="file" class="form-control" id="day3_image" name="day3_image">
                        @error('day3_image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Paragraphs for Day 4 -->
                    <div class="text-center">
                        <b>Hari empat</b>
                    </div>
                    <div class="form-group">
                        <label for="paragrap1_day4">Paragraf 1 : bisa tidak di isi jika tidak ada</label>
                        <textarea class="form-control" name="paragrap1_day4" id="paragrap1_day4" cols="30" rows="10"></textarea>
                        {{-- <input type="text" class="form-control" id="paragrap1_day4" name="paragrap1_day4"> --}}
                        @error('paragrap1_day4')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="paragrap2_day4">Paragraf 2 : bisa tidak di isi jika tidak ada</label>
                        <textarea class="form-control" name="paragrap2_day4" id="paragrap2_day4" cols="30" rows="10"></textarea>
                        {{-- <input type="text" class="form-control" id="paragrap2_day4" name="paragrap2_day4"> --}}
                        @error('paragrap2_day4')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="day4_image">Gambar : Gambar : bisa tidak di isi jika tidak ada</label>
                        <input type="file" class="form-control" id="day4_image" name="day4_image">
                        @error('day4_image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan Artikel</button>
                </form>
            </div>

        </div>
    </div>
@endsection
