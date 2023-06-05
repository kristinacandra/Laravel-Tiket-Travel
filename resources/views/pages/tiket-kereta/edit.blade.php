@extends('layout')
@section('content')
<h3 class>EDIT DATA TIKET KERETA API</h3>
<form action="{{ route('tiketkereta.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="id_tiket" class="form-label">Id Tiket</label>
        <input type="string" class="form-control form-control-sm" name="id_tiket" id="id_tiket" placeholder=""
            value="{{$data->id_tiket}}">
    </div>
    <label>Nama Kereta</label>
    <div class="col-sm-12">
        <select name="id_kereta" class="form-control">
            <option class="disable" value="">--- Pilih Nama Kereta Api ---</option>
            @foreach ($kereta as $data)
                <option value="{{ $data->id }}">{{ $data->nama_kereta }}</option>
            @endforeach
        </select>
    </div>
    <label>Id Jadwal</label>
    <div class="mb-3">
       <select name="id_jadwal" class="form-control">
            <option class="disable" value="">---Pilih Jadwal---</option>
            @foreach ($jadwal as $data)
                <option value="{{ $data->id }}">{{ $data->id }}</option>
            @endforeach
        </select>
    </div>
    <label>Kode Kota</label>
    <div class="col-sm-12">
        <select name="id_kota" class="form-control">
            <option class="disable" value="">---Pilih Kota---</option>
            @foreach ($kota as $data)
                <option value="{{ $data->id }}">{{ $data->kode_kota }}</option>
            @endforeach
        </select>
    </div>
    <label>Id Pengguna</label>
    <div class="col-sm-12">
        <select name="id_pengguna" class="form-control">
            <option class="disable" value="">---Pilih Id Pengguna---</option>
            @foreach ($pengguna as $data)
                <option value="{{ $data->id }}">{{ $data->id_pengguna }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="kelas" class="form-label">Kelas</label>
        <input type="string" class="form-control form-control-sm" name="kelas" id="kelas" placeholder=""
            value="{{$data->kelas}}">
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="integer" class="form-control form-control-sm" name="harga" id="harga" placeholder=""
            value="{{$data->harga}}">
    </div>
    <a href="{{route('tiketkereta')}}" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
</form>
@endsection