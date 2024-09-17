

@if ($transaksi->status == 'checked')
    <div class="alert alert-warning">
        Sedang diproses. Harap tunggu.
    </div>
@elseif ($transaksi->status == 'success')
    <div class="alert alert-success">
        Anda sudah melakukan pembayaran.
    </div>
@else
    <form action="{{ route('konfirmasi.transaksi', $transaksi->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container">
            <h1>Create Transaction</h1>
            <div class="form-group">
                {{-- <input type="hidden" name="status" id="status" value="checked"> --}}
                <label for="image">upload bukti transaksi:</label>
                <input type="file" class="form-control" id="image" name="image" required>
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endif
