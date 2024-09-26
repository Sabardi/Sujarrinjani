

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
                <table>
                    {{-- <input type="hidden" name="status" id="status" value="checked"> --}}
                    <label for="name">kode booking</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $transaksi->booking->kode_booking }}" readonly>

                    <label for="name">Bank payment</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $transaksi->payment->name }}" readonly>

                    <label for="name">Nasabah name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $transaksi->payment->nasabah_name }}" readonly>

                    <label for="name">wisata name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $transaksi->booking->tour->name }}" readonly>


                    <label for="image">upload bukti transaksi:</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </table>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endif
