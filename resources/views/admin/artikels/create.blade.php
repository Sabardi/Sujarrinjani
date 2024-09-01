<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Buat Artikel Baru</h1>
        <form action="{{ route('artikels.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Tour ID -->
            <div class="form-group">
                <label for="tours_id">Tour ID:</label>
                <input type="text" class="form-control" id="tours_id" name="tours_id" required>
                @error('tours_id')
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
                <input type="text" class="form-control" id="paragrap1_day1" name="paragrap1_day1" required>
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
                <input type="text" class="form-control" id="paragrap1_day2" name="paragrap1_day2" required>
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
                <input type="text" class="form-control" id="paragrap1_day3" name="paragrap1_day3" required>
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
                <input type="text" class="form-control" id="paragrap1_day4" name="paragrap1_day4">
                @error('paragrap1_day4')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="paragrap2_day4">Paragraf 2 Hari 4:</label>
                <input type="text" class="form-control" id="paragrap2_day4" name="paragrap2_day4">
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
</body>

</html>
