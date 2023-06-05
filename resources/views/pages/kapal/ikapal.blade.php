@extends('layout')
@section('content')
<h1 class="text-center">KAPAL LAUT</h1>
    <div>
        <a href="{{route('kapal.create')}}" class="btn btn-primary">+ Tambah Data</a>
    </div>
  <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Kode Kapal</th>
            <th scope="col">Nama Kapal</th>
            <th scope="col">Kode Rute</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        @foreach ($data as $item)
            <tr>
                <td class="col-1">{{ $i }}</td>
                <td class="col-2">{{ $item->kode_kapal }}</td>
                <td class="col-2">{{ $item->nama_kapal }}</td>
                <td class="col-2">{{ $item->kode_rute }}</td>
                <td class="col-2">
                    <a href="{{route('kapal.edit',$item->id)}}" class="btn btn-sm btn-warning">Edit</a>
                    <form onsubmit="return confirm('Yakin Ingin menghapus data ini?')" action=" {{ route('kapal.destroy', $item->id) }}"
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