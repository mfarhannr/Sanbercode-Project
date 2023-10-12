@extends('layout.master')

@section('judul')
Tambah Pemain
@endsection

@section('content')
<div>
        <form action="/cast" method="post">
            @csrf
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama pemain">
                @error('nama')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label>umur</label>
                <input type="number" class="form-control" name="umur" id="umur" placeholder="Masukkan umur">
                @error('umur')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label>bio</label>
                <input type="text" class="form-control" name="bio" id="bio" placeholder="Masukkan deskripsi">
                @error('bio')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
</div>
@endsection