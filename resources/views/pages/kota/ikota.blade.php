@extends('layout')
@section('content')
    <h1 class="text-center">KOTA</h1>
    <div>
        <a href="{{route('kota.create')}}" class="btn btn-primary">+ Tambah Data</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Kota</th>
                <th scope="col">Kota Asal</th>
                <th scope="col">Kota Tujuan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
                @foreach ($data as $item)
                    <tr>
                        <td class="col-1">{{ $i }}</td>
                        <td class="col-2">{{ $item->kode_kota }}</td>
                        <td class="col-2">{{ $item->kota_asal }}</td>
                        <td class="col-2">{{ $item->kota_tujuan }}</td>
                        <td class="col-2">
                            <a href="{{route('kota.edit',$item->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            <form onsubmit="return confirm('Yakin Ingin menghapus data ini?')" action=" {{ route('kota.destroy', $item->id) }}"
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