@extends('layout')
@section('content')
<h3 class>TAMBAH DATA PEGAWAI</h3>
<form action="{{ route('pegawai.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="id_pegawai" class="form-label">Id Pegawai</label>
        <input type="string" class="form-control form-control-sm" name="id_pegawai" id="id_pegawai" placeholder=""
            value="">
    </div>
    <div class="mb-3">
        <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
        <input type="string" class="form-control form-control-sm" name="nama_pegawai" id="nama_pegawai" placeholder=""
            value="">
    </div>
    <div class="mb-3">
        <label for="jabatan" class="form-label">Jabatan</label>
        <input type="string" class="form-control form-control-sm" name="jabatan" id="jabatan" placeholder=""
            value="">
    </div>
    <div class="mb-3">
        <label for="id_pesanan" class="form-label">Id Pesanan</label>
        <input type="string" class="form-control form-control-sm" name="id_pesanan" id="id_pesanan" placeholder=""
            value="">
    </div>  
    <a href="{{route('pegawai')}}" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>    
</form>
@endsection