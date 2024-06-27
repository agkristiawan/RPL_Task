@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Admin Wilayah</h1>
        <form action="{{ route('admin_wilayah.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}">
                @error('username')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="id_kelurahan">Kelurahan</label>
                <select class="form-control" id="id_kelurahan" name="id_kelurahan">
                    <option value="">Pilih Kelurahan</option>
                    @foreach ($kelurahan as $klr)
                        <option value="{{ $klr->id_kelurahan }}">{{ $klr->nama_kelurahan }}</option>
                    @endforeach
                </select>
                @error('id_kelurahan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
