@extends('layout')
@section('content')
<h1 class="text-center">PEGAWAI</h1>
    <div>
        <a href="{{route('pegawai.create')}}" class="btn btn-primary">+ Tambah Data</a>
        <a href="{{route('pegawai.report')}}" rel="noopener" target="_blank" class="btn btn-secondary"><i class="fas fa-print"></i>
            Print</a>
    </div>
  <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Id Pegawai</th>
            <th scope="col">Nama Pegawai</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Id Pesanan</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        @foreach ($data as $item)
            <tr>
                <td class="col-1">{{ $i }}</td>
                <td class="col-2">{{ $item->id_pegawai }}</td>
                <td class="col-2">{{ $item->nama_pegawai }}</td>
                <td class="col-2">{{ $item->jabatan }}</td>
                <td class="col-2">{{ $item->id_pesanan }}</td>
                <td class="col-2">
                    <a href="{{route('pegawai.edit',$item->id)}}" class="btn btn-sm btn-warning">Edit</a>
                    <form onsubmit="return confirm('Yakin Ingin menghapus data ini?')" action=" {{ route('pegawai.destroy', $item->id) }}"
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