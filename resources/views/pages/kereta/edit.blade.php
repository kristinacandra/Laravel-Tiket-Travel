@extends('layout')
@section('content')
<h3 class>EDIT DATA KERETA API</h3>
<form action="{{ route('kereta.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="kode_kereta" class="form-label">Kode Kereta</label>
        <input type="string" class="form-control form-control-sm" name="kode_kereta" id="kode_kereta" placeholder=""
            value="{{$data->kode_kereta}}">
    </div>
    <div class="mb-3">
        <label for="nama_kereta" class="form-label">Waktu Keberangkatan</label>
        <input type="string" class="form-control form-control-sm" name="nama_kereta" id="nama_kereta" placeholder=""
            value="{{$data->nama_kereta}}">
    </div>
    <div class="mb-3">
        <label for="kode_rute" class="form-label">Tanggal Tiba</label>
        <input type="string" class="form-control form-control-sm" name="kode_rute" id="kode_rute" placeholder=""
            value="{{$data->kode_rute}}">
    </div>
    <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
</form>

@endsection