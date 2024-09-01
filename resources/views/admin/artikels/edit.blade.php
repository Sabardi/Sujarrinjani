<div class="container">
    <h1>Edit Artikel</h1>
    <form action="{{ route('artikels.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Tour ID -->
        <div class="form-group">
            <label for="tours_id">Tour ID:</label>
            <input type="text" class="form-control" id="tours_id" name="tours_id" value="{{ $artikel->tours_id }}"
                required>
            @error('tours_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Quote -->
        <div class="form-group">
            <label for="quote">Quote:</label>
            <input type="text" class="form-control" id="quote" name="quote" value="{{ $artikel->quote }}"
                required>
            @error('quote')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Itinerary -->
        <div class="form-group">
            <label for="itinerary">Itinerary:</label>
            <input type="text" class="form-control" id="itinerary" name="itinerary" value="{{ $artikel->itinerary }}"
                required>
            @error('itinerary')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Paragraphs for Day 1 -->
        <div class="form-group">
            <label for="paragrap1_day1">Paragraf 1 Hari 1:</label>
            <input type="text" class="form-control" id="paragrap1_day1" name="paragrap1_day1"
                value="{{ $artikel->paragrap1_day1 }}" required>
            @error('paragrap1_day1')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="paragrap2_day1">Paragraf 2 Hari 1:</label>
            <input type="text" class="form-control" id="paragrap2_day1" name="paragrap2_day1"
                value="{{ $artikel->paragrap2_day1 }}">
            @error('paragrap2_day1')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Paragraphs for Day 2 -->
        <div class="form-group">
            <label for="paragrap1_day2">Paragraf 1 Hari 2:</label>
            <input type="text" class="form-control" id="paragrap1_day2" name="paragrap1_day2"
                value="{{ $artikel->paragrap1_day2 }}" required>
            @error('paragrap1_day2')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="paragrap2_day2">Paragraf 2 Hari 2:</label>
            <input type="text" class="form-control" id="paragrap2_day2" name="paragrap2_day2"
                value="{{ $artikel->paragrap2_day2 }}">
            @error('paragrap2_day2')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Paragraphs for Day 3 -->
        <div class="form-group">
            <label for="paragrap1_day3">Paragraf 1 Hari 3:</label>
            <input type="text" class="form-control" id="paragrap1_day3" name="paragrap1_day3"
                value="{{ $artikel->paragrap1_day3 }}" required>
            @error('paragrap1_day3')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="paragrap2_day3">Paragraf 2 Hari 3:</label>
            <input type="text" class="form-control" id="paragrap2_day3" name="paragrap2_day3"
                value="{{ $artikel->paragrap2_day3 }}">
            @error('paragrap2_day3')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Paragraphs for Day 4 -->
        <div class="form-group">
            <label for="paragrap1_day4">Paragraf 1 Hari 4:</label>
            <input type="text" class="form-control" id="paragrap1_day4" name="paragrap1_day4"
                value="{{ $artikel->paragrap1_day4 }}">
            @error('paragrap1_day4')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="paragrap2_day4">Paragraf 2 Hari 4:</label>
            <input type="text" class="form-control" id="paragrap2_day4" name="paragrap2_day4"
                value="{{ $artikel->paragrap2_day4 }}">
            @error('paragrap2_day4')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Images -->
        <div class="form-group">
            <label for="day1_image">Gambar Hari 1:</label>
            <input type="file" class="form-control" id="day1_image" name="day1_image">
            @if ($artikel->day1_image)
                <img src="{{ asset($artikel->day1_image) }}" alt="Day 1 Image"
                    style="max-width: 200px; height: auto;">
            @endif
            @error('day1_image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="day2_image">Gambar Hari 2:</label>
            <input type="file" class="form-control" id="day2_image" name="day2_image">
            @if ($artikel->day2_image)
                <img src="{{ asset($artikel->day2_image) }}" alt="Day 2 Image"
                    style="max-width: 200px; height: auto;">
            @endif
            @error('day2_image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="day3_image">Gambar Hari 3:</label>
            <input type="file" class="form-control" id="day3_image" name="day3_image">
            @if ($artikel->day3_image)
                <img src="{{ asset($artikel->day3_image) }}" alt="Day 3 Image"
                    style="max-width: 200px; height: auto;">
            @endif
            @error('day3_image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="day4_image">Gambar Hari 4:</label>
            <input type="file" class="form-control" id="day4_image" name="day4_image">
            @if ($artikel->day4_image)
                <img src="{{ asset($artikel->day4_image) }}" alt="Day 4 Image"
                    style="max-width: 200px; height: auto;">
            @endif
            @error('day4_image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Artikel</button>
    </form>
</div>
