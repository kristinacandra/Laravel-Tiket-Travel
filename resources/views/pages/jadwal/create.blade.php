@extends('layout')
@section('content')
<h3 class>TAMBAH DATA JADWAL</h3>
<form action="{{ route('jadwal.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="tanggal_keberangkatan" class="form-label">Tanggal Keberangkatan</label>
        <input type="date" class="form-control form-control-sm" name="tanggal_keberangkatan" id="tanggal_keberangkatan" placeholder=""
            value="">
    </div>
    <div class="mb-3">
        <label for="waktu_keberangkatan" class="form-label">Waktu Keberangkatan</label>
        <input type="time" class="form-control form-control-sm" name="waktu_keberangkatan" id="waktu_keberangkatan" placeholder=""
            value="">
    </div>
    <div class="mb-3">
        <label for="tanggal_tiba" class="form-label">Tanggal Tiba</label>
        <input type="date" class="form-control form-control-sm" name="tanggal_tiba" id="tanggal_tiba" placeholder=""
            value="">
    </div>
    <div class="mb-3">
        <label for="waktu_tiba" class="form-label">Waktu Tiba</label>
        <input type="time" class="form-control form-control-sm" name="waktu_tiba" id="waktu_tiba" placeholder=""
            value="">
    </div>  
    <a href="{{route('jadwal')}}" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>    
</form>

@endsection