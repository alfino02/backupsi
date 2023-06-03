@extends('layout.layout')
@section('content')
    <!-- Earnings (Monthly) Card Example -->
    {{-- <h1 class="h3 mb-2 text-gray-800">Tabel User</h1> --}}
    {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
            DataTables documentation</a>.</p> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTable Obat</h6>
            <a href="{{ route('obat.create') }}" class="btn btn-primary">Tambah Data</a>
            <a href="{{ route('obat.report') }}" class="btn btn-success">Cetak Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Obat</th>
                            <th>Despkripsi Obat</th>
                            <th>Aksi</th>
                        </tr>
                        @forelse ($obat as $item)
                            <tr>
                                <td>{{$item->nama_obat }}</td>
                                <td>{{ $item->deskripsi_obat}}</td>
                                <td>
                                    <a href="{{ route('obat.edit', ['id' => $item->id]) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('obat.destroy', ['id' => $item->id]) }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
