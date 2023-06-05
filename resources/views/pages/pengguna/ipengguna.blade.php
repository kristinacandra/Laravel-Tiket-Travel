@extends('layout')
@section('content')
<h1 class="text-center">PENGGUNA</h1>
    <div>
        <a href="{{route('pengguna.create')}}" class="btn btn-primary">+ Tambah Data</a>
        <a href="{{route('pengguna.report')}}" rel="noopener" target="_blank" class="btn btn-secondary"><i class="fas fa-print"></i>
            Print</a>
    </div>
  <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Id Pengguna</th>
            <th scope="col">Nama Pengguna</th>
            <th scope="col">Alamat</th>
            <th scope="col">No Telpon</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        @foreach ($data as $item)
            <tr>
                <td class="col-1">{{ $i }}</td>
                <td class="col-2">{{ $item->id_pengguna }}</td>
                <td class="col-2">{{ $item->nama_pengguna }}</td>
                <td class="col-2">{{ $item->alamat }}</td>
                <td class="col-2">{{ $item->no_telp }}</td>
                <td class="col-2">
                    <a href="{{route('pengguna.edit',$item->id)}}" class="btn btn-sm btn-warning">Edit</a>
                    <form onsubmit="return confirm('Yakin Ingin menghapus data ini?')" action=" {{ route('pengguna.destroy', $item->id) }}"
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