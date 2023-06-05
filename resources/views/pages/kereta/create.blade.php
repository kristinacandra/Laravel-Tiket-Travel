@extends('layout')
@section('content')
<h3 class>TAMBAH DATA KERETA API</h3>
<form action="{{ route('kereta.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="kode_kereta" class="form-label">Kode Kereta</label>
        <input type="string" class="form-control form-control-sm" name="kode_kereta" id="kode_kereta" placeholder=""
            value="">
    </div>
    <div class="mb-3">
        <label for="nama_kereta" class="form-label">Nama Kereta</label>
        <input type="string" class="form-control form-control-sm" name="nama_kereta" id="nama_kereta" placeholder=""
            value="">
    </div>
    <div class="mb-3">
        <label for="kode_rute" class="form-label">Kode Rute</label>
        <input type="string" class="form-control form-control-sm" name="kode_rute" id="kode_rute" placeholder=""
            value="">
    </div>      
    <a href="{{route('kereta')}}" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>    
</form>
@endsection