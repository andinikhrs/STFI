@extends('layouts.admin')

@section('content')
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-12" >
                @include('layouts/_flash')
                <div class="card" >
                    <div class="card-header">
                        Data inventaris
                        <a href="{{ route('inventaris.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body" >
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Alat</th>
                                        <th>Merk</th>
                                        <th>Harga Satuan</th>
                                        <th>Jumlah</th>
                                        <th>Lokasi</th>
                                        <th>Kondisi</th>
                                        <th>Tahun Pembuatan</th>
                                        <th>Usia Barang</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($inventaris as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->namaalat }}</td>
                                            <td>{{ $data->Merk }}</td>
                                            <td>{{ $data->hargasatuan }}</td>
                                            <td>{{ $data->jumlah }}</td>
                                            <td>{{ $data->lokasi }}</td>
                                            <td>{{ $data->kodisi }}</td>
                                            <td>{{ date('d M Y', strtotime($data->tahunpembuatan)) }}</td>
                                            <td>{{ $data->usiabarang }}</td>
                                            <td>
                                                <form action="{{ route('inventaris.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('inventaris.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    <a href="{{ route('inventaris.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning">
                                                        Show
                                                    </a> |
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Apakah Anda Yakin?')">Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection