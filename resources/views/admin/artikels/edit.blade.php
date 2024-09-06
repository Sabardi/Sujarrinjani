@extends('admin.layouts.app')
@section('Toures', 'active')
{{-- opsi solusi pertama untuk artikel --}}
@section('content')
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
                <h1>Edit Artikel Baru</h1>

                <form action="{{ route('artikels.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Tour ID -->
                    <div class="form-group">
                        <label for="tours_id">Tour :</label>
                        <select class="form-control" name="tours_id" id="tours_id">
                            <option value="{{ $artikel->tour->id }}">{{ $artikel->tour->name }} </option>
                            @foreach ($tours as $k)
                                <option value="{{ $k->id }}" {{ old('tours_id') == $k->id ? 'selected' : '' }}>
                                    {{ $k->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('tours_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Quote -->
                    <div class="form-group">
                        <label class="floatingTextarea2" for="quote">Quote:</label>
                        <textarea class="form-control" name="quote" id="quote" cols="30" rows="10">{{ $artikel->quote }}</textarea>
                        @error('quote')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Itinerary -->
                    <div class="form-group">
                        <label for="itinerary">Itinerary:</label>
                        <textarea class="form-control" name="itinerary" id="itinerary" cols="30" rows="10">{{ $artikel->itinerary }}</textarea>
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
                        <textarea class="form-control" name="paragrap1_day1" id="paragrap1_day1" cols="30" rows="10">{{ $artikel->paragrap1_day1 }}</textarea>
                        @error('paragrap1_day1')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="paragrap2_day1">Paragraf 2:</label>
                        <textarea class="form-control" name="paragrap2_day1" id="paragrap2_day1" cols="30" rows="10">{{ $artikel->paragrap2_day1 }}</textarea>
                        {{-- <input type="text" class="form-control" id="paragrap2_day1" name="paragrap2_day1"> --}}
                        @error('paragrap2_day1')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="day1_image">Gambar Hari 1:</label>
                        <input type="file" class="form-control" id="day1_image" name="day1_image">

                        @if ($artikel->day1_image)
                            <!-- Tampilkan gambar dan tambahkan tombol hapus -->
                            <img src="{{ asset($artikel->day1_image) }}" alt="Day 1 Image"
                                style="max-width: 200px; height: auto;">

                            <!-- Tombol hapus gambar -->
                            <button type="button" class="btn btn-danger" id="delete-image-btn"
                                onclick="deleteImage()">Hapus Gambar</button>

                            <!-- Hidden input untuk menyimpan status hapus -->
                            <input type="hidden" name="delete_day1_image" id="delete_day1_image" value="0">
                        @endif

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
                        <textarea class="form-control" name="paragrap1_day2" id="paragrap1_day2" cols="30" rows="10">{{ $artikel->paragrap1_day2 }}</textarea>
                        {{-- <input type="text" class="form-control" id="paragrap1_day2" name="paragrap1_day2"> --}}
                        @error('paragrap1_day2')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="paragrap2_day2">Paragraf 2:</label>
                        <textarea class="form-control" name="paragrap2_day2" id="paragrap2_day2" cols="30" rows="10">{{ $artikel->paragrap2_day2 }}</textarea>
                        {{-- <input type="text" class="form-control" id="paragrap2_day2" name="paragrap2_day2"> --}}
                        @error('paragrap2_day2')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="day2_image">Gambar: bisa tidak di isi jika tidak ada</label>
                        <input type="file" class="form-control" id="day2_image" name="day2_image">
                        @if ($artikel->day2_image)
                            <img src="{{ asset($artikel->day2_image) }}" alt="Day 2 Image"
                                style="max-width: 200px; height: auto;">
                        @endif
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
                        <textarea class="form-control" name="paragrap1_day3" id="paragrap1_day3" cols="30" rows="10">{{ $artikel->paragrap1_day3 }}</textarea>
                        {{-- <input type="text" class="form-control" id="paragrap1_day3" name="paragrap1_day3"> --}}
                        @error('paragrap1_day3')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="paragrap2_day3">Paragraf 2 bisa tidak di isi jika tidak ada:</label>
                        <textarea class="form-control" name="paragrap2_day3" id="paragrap2_day3" cols="30" rows="10">{{ $artikel->paragrap2_day3 }}</textarea>
                        {{-- <input type="text" class="form-control" id="paragrap2_day3" name="paragrap2_day3"> --}}
                        @error('paragrap2_day3')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="day3_image">Gambar : bisa tidak di isi jika tidak ada</label>
                        <input type="file" class="form-control" id="day3_image" name="day3_image">
                        @if ($artikel->day3_image)
                            <img src="{{ asset($artikel->day3_image) }}" alt="Day 3 Image"
                                style="max-width: 200px; height: auto;">
                        @endif
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
                        <textarea class="form-control" name="paragrap1_day4" id="paragrap1_day4" cols="30" rows="10">{{ $artikel->paragrap1_day4 }}</textarea>
                        {{-- <input type="text" class="form-control" id="paragrap1_day4" name="paragrap1_day4"> --}}
                        @error('paragrap1_day4')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="paragrap2_day4">Paragraf 2 : bisa tidak di isi jika tidak ada</label>
                        <textarea class="form-control" name="paragrap2_day4" id="paragrap2_day4" cols="30" rows="10">{{ $artikel->paragrap2_day4 }}</textarea>
                        {{-- <input type="text" class="form-control" id="paragrap2_day4" name="paragrap2_day4"> --}}
                        @error('paragrap2_day4')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="day4_image">Gambar : Gambar : bisa tidak di isi jika tidak ada</label>
                        <input type="file" class="form-control" id="day4_image" name="day4_image">
                        @if ($artikel->day4_image)
                            <img src="{{ asset($artikel->day4_image) }}" alt="Day 4 Image"
                                style="max-width: 200px; height: auto;">
                        @endif
                        @error('day4_image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="">
                        <a href="{{ route('artikels.index') }}"><button class="btn btn-secondary">Batal</button></a>
                        <button type="submit" class="btn btn-primary">Update Artikel</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection

<script>
    function deleteImage() {
        // Set hidden input value to 1 to indicate image deletion
        document.getElementById('delete_day1_image').value = 1;

        // Optionally hide the image and the delete button after click
        document.querySelector('img').style.display = 'none';
        document.getElementById('delete-image-btn').style.display = 'none';
    }
    </script>
