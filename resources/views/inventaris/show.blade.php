
@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data inventaris
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">No</label>
                            <input type="text" class="form-control " name="noinventaris" value="{{ $inventaris->noinventaris }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Alat</label>
                            <input type="text" class="form-control " name="namaalat" value="{{ $inventaris->namaalat }}" readonly>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Merk</label>
                            <input type="text" class="form-control " name="noinventaris" value="{{ $inventaris->Merk }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga Satuan</label>
                            <input type="text" class="form-control " name="noinventaris" value="{{ $inventaris->hargasatuan }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah</label>
                            <input type="text" class="form-control" name="jumlah" value="{{ $inventaris->jumlah }}"
                                readonly>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Lokasi</label>
                            <textarea class="form-control" name="lokasi" readonly>{{ $inventaris->lokasi }}</textarea>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kondisi</label>
                            <textarea class="form-control" name="kondisi" readonly>{{ $inventaris->kondisi }}</textarea>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tahun Pembuatan</label>
                            <textarea class="form-control" name="tahunpembuatan" readonly>{{ $inventaris->tahunpembuatan }}</textarea>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Usia Barang Layak Pakai / Tidak ?</label>
                            <textarea class="form-control" name="usiabarang" readonly>{{ $inventaris->usiabarang }}</textarea>

                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('inventaris.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection