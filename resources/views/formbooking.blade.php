<form action="{{ route('bookingstore') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="kos_nama">name toure</label>
        {{-- <input type="text" class="form-control form-control-lg" id="tours_id" value="{{ $id->name }}" readonly> --}}
        <input type="text" class="form-control-lg" id="tours_id" name="tours_id">
        {{-- <input type="hidden" id="tours_id" name="tours_id" value="{{ $id->id }}"> --}}
    </div>

    <div class="form-group">
        <label for="fullName">Full Name:</label>
        <input type="text" class="form-control" id="fullName" name="fullName" value="{{ old('fullName') }}"
            required>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
            required>
        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="pasport_number">Passport Number:</label>
        <input type="text" class="form-control" id="pasport_number" name="pasport_number"
            value="{{ old('pasport_number') }}" required>
        @error('passport_number')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="nationality">Nationality:</label>
        <input type="text" class="form-control" id="nationality" name="nationality"
            value="{{ old('nationality') }}" required>
        @error('nationality')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="total_participan">Total Participants:</label>
        <input type="number" class="form-control" id="total_participan" name="total_participan"
            value="{{ old('total_participan') }}" required>
        @error('total_participan')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="arrival_date">Arrival Date:</label>
        <input type="date" class="form-control" id="arrival_date" name="arrival_date"
            value="{{ old('arrival_date') }}" required>
        @error('arrival_date')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="pickup_time">Pickup Time:</label>
        <input type="time" class="form-control" id="pickup_time" name="pickup_time"
            value="{{ old('pickup_time') }}" required>
        @error('pickup_time')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="pickup_location">Pickup Location:</label>
        <input type="text" class="form-control" id="pickup_location" name="pickup_location"
            value="{{ old('pickup_location') }}" required>
        @error('pickup_location')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="add_message">Additional Message:</label>
        <textarea class="form-control" id="add_message" name="add_message" rows="3">{{ old('add_message') }}</textarea>
        @error('add_message')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
