@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Tambah Laporan</h5>
                        <a href="{{ route('ibu.index') }}" class="btn btn-primary btn-sm float-right mt-4">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('ibu.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nik_ibu">ID Laporan</label>
                                <input type="text" class="form-control" id="nik_ibu" name="nik_ibu" value="{{ old('nik_ibu') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="kk">ID Admin</label>
                                <input type="text" class="form-control" id="kk" name="kk" value="{{ old('kk') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_ibu">Judul Laporan</label>
                                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="{{ old('nama_ibu') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat_ibu">Deskripsi Laporan</label>
                                <input type="text" class="form-control" id="alamat_ibu" name="alamat_ibu" value="{{ old('alamat_ibu') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="tgl_lahir_ibu">Tanggal Laporan</label>
                                <input type="date" class="form-control" id="tgl_lahir_ibu" name="tgl_lahir_ibu" value="{{ old('tgl_lahir_ibu') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="kk">ID User</label>
                                <input type="text" class="form-control" id="id_kelurahan" name="id_kelurahan" value="{{ old('id_kelurahan') }}" required>
                            </div>
                        </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
