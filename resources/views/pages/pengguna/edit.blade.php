@extends('layout')
@section('content')
<h3 class>EDIT DATA PENGGUNA</h3>
<form action="{{ route('pengguna.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="id_pengguna" class="form-label">Id Pengguna</label>
        <input type="string" class="form-control form-control-sm" name="id_pengguna" id="id_pengguna" placeholder=""
            value="{{$data->id_pengguna}}">
    </div>
    <div class="mb-3">
        <label for="nama_pengguna" class="form-label">Nama Pengguna</label>
        <input type="string" class="form-control form-control-sm" name="nama_pengguna" id="nama_pengguna" placeholder=""
            value="{{$data->nama_pengguna}}">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="string" class="form-control form-control-sm" name="alamat" id="alamat" placeholder=""
            value="{{$data->alamat}}">
    </div>     
    <div class="mb-3">
        <label for="no_telp" class="form-label">No Telepon</label>
        <input type="string" class="form-control form-control-sm" name="no_telp" id="no_telp" placeholder=""
            value="{{$data->no_telp}}">
    </div>      
    <a href="{{route('pengguna')}}" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
</form>

@endsection