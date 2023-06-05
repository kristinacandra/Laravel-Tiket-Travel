@extends('layout')
@section('content')
<h3 class>EDIT DATA KOTA</h3>
<form action="{{ route('kota.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="kode_kota" class="form-label">Kode Kota</label>
        <input type="string" class="form-control form-control-sm" name="kode_kota" id="kode_kota" placeholder=""
            value="{{$data->kode_kota}}">
    </div>
    <div class="mb-3">
        <label for="kota_asal" class="form-label">Kota Asal</label>
        <input type="string" class="form-control form-control-sm" name="kota_asal" id="kota_asal" placeholder=""
            value="{{$data->kota_asal}}">
    </div>
    <div class="mb-3">
        <label for="kota_tujuan" class="form-label">Kota Tujuan</label>
        <input type="string" class="form-control form-control-sm" name="kota_tujuan" id="kota_tujuan" placeholder=""
            value="{{$data->kota_tujuan}}">
    </div> 
    <a href="{{route('kota')}}" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
</form>

@endsection