@extends('layout')
@section('content')
<h3 class>TAMBAH DATA MASKAPAI</h3>
<form action="{{ route('maskapai.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="kode_maskapai" class="form-label">Kode Maskapai</label>
        <input type="string" class="form-control form-control-sm" name="kode_maskapai" id="kode_maskapai" placeholder=""
            value="">
    </div>
    <div class="mb-3">
        <label for="nama_maskapai" class="form-label">Nama Maskapai</label>
        <input type="string" class="form-control form-control-sm" name="nama_maskapai" id="nama_maskapai" placeholder=""
            value="">
    </div>
    <div class="mb-3">
        <label for="kode_rute" class="form-label">Kode Rute</label>
        <input type="string" class="form-control form-control-sm" name="kode_rute" id="kode_rute" placeholder=""
            value="">
    </div>      
    <a href="{{route('maskapai')}}" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>    
</form>
@endsection