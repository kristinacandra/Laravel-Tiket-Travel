@extends('layout')
@section('content')
    <h1 class="text-center">TIKET KERETA API</h1>
    <div>
        <a href="{{route('tiketkereta.create')}}" class="btn btn-primary">+ Tambah Data</a>
        <a href="{{route('tiketkereta.report')}}" rel="noopener" target="_blank" class="btn btn-secondary"><i class="fas fa-print"></i>
            Print</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Id Tiket</th>
                <th scope="col">Nama Kereta</th>
                <th scope="col">Id Jadwal</th>
                <th scope="col">Nama Kota</th>
                <th scope="col">Id Pengguna</th>
                <th scope="col">Kelas</th>
                <th scope="col">Harga</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
        @foreach ($data as $item)
            <tr>
                <td class="col-1">{{ $i }}</td>
                <td class="col-2">{{ $item->id_tiket }}</td>
                <td class="col-1">{{ $item->kereta->nama_kereta }}</td>
                <td class="col-1">{{ $item->jadwal->id }}</td>
                <td class="col-1">{{ $item->kota->kode_kota }}</td>
                <td class="col-1">{{ $item->pengguna->id_pengguna }}</td>
                <td class="col-2">{{ $item->kelas }}</td>
                <td class="col-1">{{ $item->harga }}</td>
                <td class="col-2">
                    <a href="{{route('tiketkereta.edit',$item->id)}}" class="btn btn-sm btn-warning">Edit</a>
                    <form onsubmit="return confirm('Yakin Ingin menghapus data ini?')" action=" {{ route('tiketkereta.destroy', $item->id) }}"
                      class="d-inline" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-sm btn-danger" type="submit" name="submit">
                          Del
                      </button>
                  </form>
                </td>
            </tr>
            <?php $i++; ?>
        @endforeach
        </tbody>
    </table>
@endsection