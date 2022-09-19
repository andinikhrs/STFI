@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Inventaris
                    </div>
                    <div class="card-body">
                        <form action="{{ route('inventaris.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nomor Inventaris</label>
                                <input type="text" class="form-control  @error('noinventaris') is-invalid @enderror"
                                    name="noinventaris">
                                @error('noinventaris')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Alat</label>
                                <input type="text" class="form-control  @error('namaalat') is-invalid @enderror"
                                    name="namaalat">
                                @error('namaalat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Merk</label>
                                <input type="text" class="form-control  @error('Merk') is-invalid @enderror"
                                    name="Merk">
                                @error('Merk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Harga Satuan</label>
                                <input type="text" class="form-control  @error('hargasatuan') is-invalid @enderror"
                                    name="hargasatuan">
                                @error('hargasatuan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jumlah</label>
                                <input type="text" class="form-control  @error('jumlah') is-invalid @enderror"
                                    name="jumlah">
                                @error('jumlah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Lokasi</label>
                                <input type="text" class="form-control  @error('lokasi') is-invalid @enderror"
                                    name="lokasi">
                                @error('lokasi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kondisi</label>
                                <input type="text" class="form-control  @error('kondisi') is-invalid @enderror"
                                    name="kondisi">
                                @error('kondisi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tahun Pembuatan</label>
                                <input type="date" class="form-control  @error('tahunpembuatan') is-invalid @enderror"
                                    name="tahunpembuatan">
                                @error('tahunpembuatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Barang Layak Atau Tidak</label>
                                <div class="form-check">
                                    <input class="form-check-input @error('usiabarang') is-invalid @enderror"
                                        type="radio" name="usiabarang" value="Ya">
                                    <label class="form-check-label">
                                        Ya
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input @error('usiabarang') is-invalid @enderror"
                                        type="radio" name="usiabarang" value="Tidak">
                                    <label class="form-check-label">
                                        Tidak
                                    </label>
                                </div>
                                @error('usiabarang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection