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
    <style>
        .modal-dialog {
            max-width: 80%;
            /* Atur lebar modal sesuai kebutuhan */
            margin: 1.75rem auto;
            /* Menempatkan modal di tengah */
        }

        .modal-content {
            border-radius: 0.5rem;
            /* Atur radius border jika diperlukan */
            padding: 2rem;
            /* Atur padding di dalam modal */
        }

        @media (max-width: 768px) {
            .modal-dialog {
                max-width: 90%;
                /* Lebar modal lebih besar pada layar kecil */
            }
        }
    </style>

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
                        <a href="{{ route('tours.index') }}">Tours</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Tours create</a>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form action="{{ route('tours.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea class="form-control" id="description" name="description" required>{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="price">Price:</label>
                                <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}" required>
                                @error('price')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="kategori_id">Category:</label>
                                <select class="form-control" id="kategori_id" name="kategori_id" required>
                                    <option value="">Select a category</option>
                                    @foreach ($kategoris as $category)
                                        <option value="{{ $category->id }}" {{ old('kategori_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('kategori_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" class="form-control" id="image" name="image" required>
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="content">Content:</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5" placeholder="Masukkan Konten Post">{{ old('content') }}</textarea>
                                @error('content')
                                    <div class="mt-2 alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
                            <script>
                                CKEDITOR.replace('content');
                            </script>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
