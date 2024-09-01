@extends('admin.layouts.app')
@section('Toures', 'active')

@section('content')
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
                        <a href="#">Toures</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Artikel</a>
                    </li>
                </ul>
            </div>

            @if ($message = Session::get('success'))
                <div class="mt-3 alert alert-success">
                    {{ $message }}
                </div>
            @endif

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Artikel</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('artikels.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="tours_id">Tour:</label>
                                    <select class="form-control" id="tours_id" name="tours_id" required>
                                        <option value="">Select tours</option>
                                        @foreach ($toures as $k)
                                            <option value="{{ $k->id }}"
                                                {{ old('tours_id') == $k->id ? 'selected' : '' }}>
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
                                    <label for="quote">Quote:</label>
                                    <input type="text" class="form-control" id="quote" name="quote" required>
                                    @error('quote')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Itinerary -->
                                <div class="form-group">
                                    <label for="itinerary">Itinerary:</label>
                                    <input type="text" class="form-control" id="itinerary" name="itinerary" required>
                                    @error('itinerary')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Paragraphs for Day 1 -->
                                <div class="form-group">
                                    <label for="paragrap1_day1">Paragraf 1 Hari 1:</label>
                                    <input type="text" class="form-control" id="paragrap1_day1" name="paragrap1_day1"
                                        required>
                                    @error('paragrap1_day1')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="paragrap2_day1">Paragraf 2 Hari 1:</label>
                                    <input type="text" class="form-control" id="paragrap2_day1" name="paragrap2_day1">
                                    @error('paragrap2_day1')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Paragraphs for Day 2 -->
                                <div class="form-group">
                                    <label for="paragrap1_day2">Paragraf 1 Hari 2:</label>
                                    <input type="text" class="form-control" id="paragrap1_day2" name="paragrap1_day2"
                                        required>
                                    @error('paragrap1_day2')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="paragrap2_day2">Paragraf 2 Hari 2:</label>
                                    <input type="text" class="form-control" id="paragrap2_day2" name="paragrap2_day2">
                                    @error('paragrap2_day2')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Paragraphs for Day 3 -->
                                <div class="form-group">
                                    <label for="paragrap1_day3">Paragraf 1 Hari 3:</label>
                                    <input type="text" class="form-control" id="paragrap1_day3" name="paragrap1_day3"
                                        required>
                                    @error('paragrap1_day3')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="paragrap2_day3">Paragraf 2 Hari 3:</label>
                                    <input type="text" class="form-control" id="paragrap2_day3" name="paragrap2_day3">
                                    @error('paragrap2_day3')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Paragraphs for Day 4 -->
                                <div class="form-group">
                                    <label for="paragrap1_day4">Paragraf 1 Hari 4:</label>
                                    <input type="text" class="form-control" id="paragrap1_day4"
                                        name="paragrap1_day4">
                                    @error('paragrap1_day4')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="paragrap2_day4">Paragraf 2 Hari 4:</label>
                                    <input type="text" class="form-control" id="paragrap2_day4"
                                        name="paragrap2_day4">
                                    @error('paragrap2_day4')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Images -->
                                <div class="form-group">
                                    <label for="day1_image">Gambar Hari 1:</label>
                                    <input type="file" class="form-control" id="day1_image" name="day1_image">
                                    @error('day1_image')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="day2_image">Gambar Hari 2:</label>
                                    <input type="file" class="form-control" id="day2_image" name="day2_image">
                                    @error('day2_image')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="day3_image">Gambar Hari 3:</label>
                                    <input type="file" class="form-control" id="day3_image" name="day3_image">
                                    @error('day3_image')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="day4_image">Gambar Hari 4:</label>
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
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                {{-- <h4 class="card-title">Add Row</h4> --}}
                                <button type="button" class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <i class="fa fa-plus"></i>
                                    Add Artikel
                                </button>
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
                                                        <button type="button" class="btn btn-link btn-warning btn-lg"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal{{ $artikel->id }}">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
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

                                            <div class="modal fade" id="exampleModal{{ $artikel->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit
                                                                Artikel
                                                            </h1>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('artikels.update', $artikel->id) }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')

                                                                <!-- Tour ID -->
                                                                <select class="form-control" id="tours_id"
                                                                    name="tours_id" required>
                                                                    <option value="{{ $artikel->tour->id }}">
                                                                        {{ $artikel->tour->name }}</option>
                                                                    @foreach ($toures as $k)
                                                                        <option value="{{ $k->id }}"
                                                                            {{ old('tours_id') == $k->id ? 'selected' : '' }}>
                                                                            {{ $k->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>

                                                                <!-- Quote -->
                                                                <div class="form-group">
                                                                    <label for="quote">Quote:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="quote" name="quote"
                                                                        value="{{ $artikel->quote }}" required>
                                                                    @error('quote')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>

                                                                <!-- Itinerary -->
                                                                <div class="form-group">
                                                                    <label for="itinerary">Itinerary:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="itinerary" name="itinerary"
                                                                        value="{{ $artikel->itinerary }}" required>
                                                                    @error('itinerary')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>

                                                                <!-- Paragraphs for Day 1 -->
                                                                <div class="form-group">
                                                                    <label for="paragrap1_day1">Paragraf 1 Hari 1:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="paragrap1_day1" name="paragrap1_day1"
                                                                        value="{{ $artikel->paragrap1_day1 }}" required>
                                                                    @error('paragrap1_day1')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="paragrap2_day1">Paragraf 2 Hari 1:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="paragrap2_day1" name="paragrap2_day1"
                                                                        value="{{ $artikel->paragrap2_day1 }}">
                                                                    @error('paragrap2_day1')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>

                                                                <!-- Paragraphs for Day 2 -->
                                                                <div class="form-group">
                                                                    <label for="paragrap1_day2">Paragraf 1 Hari 2:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="paragrap1_day2" name="paragrap1_day2"
                                                                        value="{{ $artikel->paragrap1_day2 }}" required>
                                                                    @error('paragrap1_day2')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="paragrap2_day2">Paragraf 2 Hari 2:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="paragrap2_day2" name="paragrap2_day2"
                                                                        value="{{ $artikel->paragrap2_day2 }}">
                                                                    @error('paragrap2_day2')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>

                                                                <!-- Paragraphs for Day 3 -->
                                                                <div class="form-group">
                                                                    <label for="paragrap1_day3">Paragraf 1 Hari 3:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="paragrap1_day3" name="paragrap1_day3"
                                                                        value="{{ $artikel->paragrap1_day3 }}" required>
                                                                    @error('paragrap1_day3')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="paragrap2_day3">Paragraf 2 Hari 3:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="paragrap2_day3" name="paragrap2_day3"
                                                                        value="{{ $artikel->paragrap2_day3 }}">
                                                                    @error('paragrap2_day3')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>

                                                                <!-- Paragraphs for Day 4 -->
                                                                <div class="form-group">
                                                                    <label for="paragrap1_day4">Paragraf 1 Hari 4:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="paragrap1_day4" name="paragrap1_day4"
                                                                        value="{{ $artikel->paragrap1_day4 }}">
                                                                    @error('paragrap1_day4')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="paragrap2_day4">Paragraf 2 Hari 4:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="paragrap2_day4" name="paragrap2_day4"
                                                                        value="{{ $artikel->paragrap2_day4 }}">
                                                                    @error('paragrap2_day4')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>

                                                                <!-- Images -->
                                                                <div class="form-group">
                                                                    <label for="day1_image">Gambar Hari 1:</label>
                                                                    <input type="file" class="form-control"
                                                                        id="day1_image" name="day1_image">
                                                                    @if ($artikel->day1_image)
                                                                        <img src="{{ asset($artikel->day1_image) }}"
                                                                            alt="Day 1 Image"
                                                                            style="max-width: 200px; height: auto;">
                                                                    @endif
                                                                    @error('day1_image')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="day2_image">Gambar Hari 2:</label>
                                                                    <input type="file" class="form-control"
                                                                        id="day2_image" name="day2_image">
                                                                    @if ($artikel->day2_image)
                                                                        <img src="{{ asset($artikel->day2_image) }}"
                                                                            alt="Day 2 Image"
                                                                            style="max-width: 200px; height: auto;">
                                                                    @endif
                                                                    @error('day2_image')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="day3_image">Gambar Hari 3:</label>
                                                                    <input type="file" class="form-control"
                                                                        id="day3_image" name="day3_image">
                                                                    @if ($artikel->day3_image)
                                                                        <img src="{{ asset($artikel->day3_image) }}"
                                                                            alt="Day 3 Image"
                                                                            style="max-width: 200px; height: auto;">
                                                                    @endif
                                                                    @error('day3_image')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="day4_image">Gambar Hari 4:</label>
                                                                    <input type="file" class="form-control"
                                                                        id="day4_image" name="day4_image">
                                                                    @if ($artikel->day4_image)
                                                                        <img src="{{ asset($artikel->day4_image) }}"
                                                                            alt="Day 4 Image"
                                                                            style="max-width: 200px; height: auto;">
                                                                    @endif
                                                                    @error('day4_image')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Save</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
