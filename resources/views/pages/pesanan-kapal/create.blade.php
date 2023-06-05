@extends('layout')
@section('content')
<h3 class>TAMBAH DATA PESANAN TIKET KAPAL LAUT</h3>
<form action="{{ route('peskapal.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="id_pesanan" class="form-label">Id Pesanan</label>
        <input type="string" class="form-control form-control-sm" name="id_pesanan" id="id_pesanan" placeholder=""
            value="">
    </div>
    <div class="mb-3">
        <label for="id_tiket" class="form-label">Id Tiket</label>
        <input type="string" class="form-control form-control-sm" name="id_tiket" id="id_tiket" placeholder=""
            value="">
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="integer" class="form-control form-control-sm" name="harga" id="harga" placeholder=""
            value="">
    </div>
    <a href="{{route('peskapal')}}" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>    
</form>
@endsection