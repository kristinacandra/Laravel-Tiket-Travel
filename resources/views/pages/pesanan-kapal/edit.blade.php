@extends('layout')
@section('content')
<h3 class>EDIT DATA PESANAN TIKET KAPAL LAUT</h3>
<form action="{{ route('peskapal.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="id_pesanan" class="form-label">Id Pesanan</label>
        <input type="string" class="form-control form-control-sm" name="id_pesanan" id="id_pesanan" placeholder=""
            value="{{$data->id_pesanan}}">
    </div>
    <div class="mb-3">
        <label for="id_tiket" class="form-label">Id Tiket</label>
        <input type="string" class="form-control form-control-sm" name="id_tiket" id="id_tiket" placeholder=""
            value="{{$data->id_tiket}}">
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="integer" class="form-control form-control-sm" name="harga" id="harga" placeholder=""
            value="{{$data->harga}}">
    </div>
    <a href="{{route('peskapal')}}" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
</form>
@endsection