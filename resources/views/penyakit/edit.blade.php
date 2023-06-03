@extends('layout.layout')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mb-2 font-weight-bold text-primary">Edit Data Penyakit</h6>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{ route('penyakit.update', ['id' => $penyakit->id]) }}">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama penyakit</label>
                            <input type="text" class="form-control" id="namapenyakit" name="namapenyakit" placeholder="isikan penyakit disini disini" value="{{ $penyakit->nama_penyakit }}">
                            <label for="deskripsi" class="form-label">Deskripsi Penyakit</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="isikan deskripsi penyakit disini" value="{{ $penyakit->deskripsi_penyakit }}">
                            <label for="obat" class="form-label">Obat Penyakit</label>
                            <select class="form-select" name="obat" aria-label="Default select example">
                                <option selected disabled>Open this select menu</option>
                                @foreach ($obat as $item)
                                <option value="{{ $item->id }}" @if ($penyakit->id_obat == $item->id)
                                  selected  
                                @endif>{{ $item->nama_obat }}</option>
                                @endforeach
                            </select>
                            <label for="foto" class="form-label">Foto Penyakit</label>
                            <input type="file" class="form-control" id="foto" name="foto" placeholder="isikan foto penyakit disini">
                        </div>
                        <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
