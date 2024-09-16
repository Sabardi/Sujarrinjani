<form action="{{ route('transactions.store') }}" method="POST">
    @csrf
    <div class="container">
        <h1>Create Transaction</h1>
        <input type="text" name="bookings_id" value="{{ $booking->id }}">
        <input type="text" name="kode_booking" value="{{ $booking->kode_booking }}">
        <div class="form-group">
                    <label for="payment_id">Payment Method:</label>
                    <select name="payment_id" id="payment_id" class="form-control">
                        @foreach ($payment as $method)
                            <option value="{{ $method->id }}">{{ $method->name }}</option>
                        @endforeach
                    </select>
                </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" name="status" value="In Process" class="form-control" readonly>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
