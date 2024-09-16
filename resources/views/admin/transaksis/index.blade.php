@extends('admin.layouts.app')
@section('Transaksi', 'active')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="mb-3 fw-bold">transaki</h3>
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
                        <a href="#">Kategori</a>
                    </li>
                </ul>
            </div>

            @if ($message = Session::get('success'))
                <div class="mt-3 alert alert-success">
                    {{ $message }}
                </div>
            @endif

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Add Row</h4>
                                <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal"
                                    data-bs-target="#addRowModal">
                                    <i class="fa fa-plus"></i>
                                    Add Row
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="table display table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Tour</th>
                                            <th>email</th>
                                            <th>status</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Tour</th>
                                            <th>email</th>
                                            <th>status</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            @foreach ($transaksis as $transaksi)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $transaksi->booking->fullName }}</td>
                                            <td>{{ $transaksi->booking->tour->name }}</td>
                                            <td>{{ $transaksi->booking->email }}</td>
                                            <td>{{ $transaksi->status }}</td>
                                            <td>
                                                @if ($transaksi->status == 'unpaid')
                                                    <a href="{{ route('transaksi', ['booking' => $transaksi->booking->id, 'kode_booking' => $transaksi->booking->kode_booking]) }}"
                                                        class="btn btn-info">Pay</a>
                                                @elseif ($transaksi->status == 'checked')
                                                    <a href="#" class="btn btn-warning">Being Checked</a>
                                                @elseif ($transaksi->status == 'success')
                                                    <a href="#" class="btn btn-success">Done</a>
                                                @endif

                                                <form action="{{ route('bookings.destroy', $transaksi->id) }}"
                                                    method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tr>
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
