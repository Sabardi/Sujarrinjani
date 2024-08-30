<div class="container">
    <h1>Edit Artikel</h1>
    <form action="{{ route('artikels.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="tours_id">Tour ID:</label>
            <input type="text" class="form-control" id="tours_id" name="tours_id" value="{{ $artikel->tours_id }}" required>
            @error('tours_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="quote">Quote:</label>
            <input type="text" class="form-control" id="quote" name="quote" value="{{ $artikel->quote }}" required>
            @error('quote')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="itinerary">Itinerary:</label>
            <input type="text" class="form-control" id="itinerary" name="itinerary" value="{{ $artikel->itinerary }}" required>
            @error('itinerary')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Repeat for each day's image and paragraphs -->
        <div class="form-group">
            <label for="day1_image">Day 1 Image:</label>
            <input type="file" class="form-control" id="day1_image" name="day1_image">
            @error('day1_image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            @if($artikel->day1_image)
                <img src="{{ asset($artikel->day1_image) }}" alt="Day 1 Image" width="100">
            @endif
        </div>

        <!-- Tambahkan input untuk day2_image, day3_image, day4_image, dan paragraph sesuai kebutuhan -->

        <button type="submit" class="btn btn-primary">Update Artikel</button>
    </form>
</div>
