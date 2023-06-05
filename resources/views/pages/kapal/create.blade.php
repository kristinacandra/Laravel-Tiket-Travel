@extends('layout')
@section('content')
<h3 class>TAMBAH DATA KAPAL LAUT</h3>
<form action="{{ route('kapal.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="kode_kapal" class="form-label">Kode Kapal</label>
        <input type="string" class="form-control form-control-sm" name="kode_kapal" id="kode_kapal" placeholder=""
            value="">
    </div>
    <div class="mb-3">
        <label for="nama_kapal" class="form-label">Nama Kapal</label>
        <input type="string" class="form-control form-control-sm" name="nama_kapal" id="nama_kapal" placeholder=""
            value="">
    </div>
    <div class="mb-3">
        <label for="kode_rute" class="form-label">Kode Rute</label>
        <input type="string" class="form-control form-control-sm" name="kode_rute" id="kode_rute" placeholder=""
            value="">
    </div>      
    <a href="{{route('kapal')}}" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>    
</form>
@endsection