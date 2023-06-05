@extends('layout')
@section('content')
<h3 class>EDIT DATA JADWAL</h3>
<form action="{{ route('jadwal.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="tanggal_keberangkatan" class="form-label">Tanggal Keberangkatan</label>
        <input type="date" class="form-control form-control-sm" name="tanggal_keberangkatan" id="tanggal_keberangkatan" placeholder=""
            value="{{$data->tanggal_keberangkatan}}">
    </div>
    <div class="mb-3">
        <label for="waktu_keberangkatan" class="form-label">Waktu Keberangkatan</label>
        <input type="time" class="form-control form-control-sm" name="waktu_keberangkatan" id="waktu_keberangkatan" placeholder=""
            value="{{$data->waktu_keberangkatan}}">
    </div>
    <div class="mb-3">
        <label for="tanggal_tiba" class="form-label">Tanggal Tiba</label>
        <input type="date" class="form-control form-control-sm" name="tanggal_tiba" id="tanggal_tiba" placeholder=""
            value="{{$data->tanggal_tiba}}">
    </div>  
    <div class="mb-3">
        <label for="waktu_tiba" class="form-label">Waktu Tiba</label>
        <input type="time" class="form-control form-control-sm" name="waktu_tiba" id="waktu_tiba" placeholder=""
            value="{{$data->waktu_tiba}}">
    </div>
    <a href="{{route('jadwal')}}" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
</form>
@endsection