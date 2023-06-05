@extends('layout')
@section('content')
<h1 class="text-center">JADWAL</h1>
    <div>
      <a href="{{route('jadwal.create')}}" class="btn btn-primary">+ Tambah Data</a>
      <a href="/reportpdf" rel="noopener" target="_blank" class="btn btn-secondary"><i class="fas fa-print"></i>
          Print</a>
    </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Tanggal Keberangkatan</th>
          <th scope="col">Waktu Keberangkatan</th>
          <th scope="col">Tanggal Tiba</th>
          <th scope="col">Waktu Tiba</th>
          <th scope="col">Action</th>
        </tr>
    </thead>
      <tbody>
        <?php $i = 1; ?>
        @foreach ($data as $item)
            <tr>
                <td class="col-1">{{ $i }}</td>
                <td class="col-2">{{ $item->tanggal_keberangkatan }}</td>
                <td class="col-2">{{ $item->waktu_keberangkatan }}</td>
                <td class="col-2">{{ $item->tanggal_tiba }}</td>
                <td class="col-2">{{ $item->waktu_tiba }}</td>
                <td class="col-2">
                    <a href="{{route('jadwal.edit',$item->id)}}" class="btn btn-sm btn-warning">Edit</a>
                    <form onsubmit="return confirm('Apakah Anda Ingin Menghapus Data Ini?')" 
                      action=" {{ route('jadwal.destroy', $item->id) }}"
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