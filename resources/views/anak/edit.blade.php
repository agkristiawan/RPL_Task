@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Edit TASK</h5>
                    <a href="{{ route('anak.index') }}" class="btn btn-primary btn-sm float-right mt-4">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('anak.update', $anak->nik_anak) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nik_anak">ID USER</label>
                            <input type="text" class="form-control" id="nik_anak" name="nik_anak" value="{{ $anak->nik_anak }}">
                        </div>
                        <div class="form-group">
                            <label for="kk">ID TASK</label>
                            <input type="text" class="form-control" id="kk" name="kk" value="{{ $anak->kk }}">
                        </div>
                        <div class="form-group">
                            <label for="nama_anak">Deskripsi Tugas</label>
                            <input type="text" class="form-control" id="nama_anak" name="nama_anak" value="{{ $anak->nama_anak }}">
                        </div>
                        <div class="form-group">
                            <label for="alamat_anak">Rekomendasi mengenai Tugas</label>
                            <input type="text" class="form-control" id="alamat_anak" name="alamat_anak" value="{{ $anak->alamat_anak }}">
                        </div>
                        <div class="form-group">
                            <label for="alamat_anak">Tanggal pendaftaran Task</label>
                            <input type="text" class="form-control" id="tgl_lahir_anak" name="tgl_lahir_anak" value="{{ $anak->tgl_lahir_anak }}">
                        </div>
                        <div class="form-group">
                            <label for="alamat_anak">ID Manajer</label>
                            <input type="text" class="form-control" id="id_kelurahan" name="id_kelurahan" value="{{ $anak->id_kelurahan }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
