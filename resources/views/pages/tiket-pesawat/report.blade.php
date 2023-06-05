<!DOCTYPE html>
<html>
    <head>
        <style>
        #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #95B1BF;
        color: white;
        }
        </style>
    </head>
<body>
    <h1>DATA TIKET PESAWAT</h1>
    <table id="customers">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Id Tiket</th>
                <th scope="col">Nama Pesawat</th>
                <th scope="col">Id Jadwal</th>
                <th scope="col">Kode Kota</th>
                <th scope="col">Id Pengguna</th>
                <th scope="col">Kelas</th>
                <th scope="col">Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
        @foreach ($data as $item)
            <tr>
                <td class="col-1">{{ $i }}</td>
                <td class="col-2">{{ $item->id_tiket }}</td>
                <td class="col-1">{{ $item->maskapai->nama_maskapai }}</td>
                <td class="col-1">{{ $item->jadwal->id }}</td>
                <td class="col-1">{{ $item->kota->kode_kota }}</td>
                <td class="col-1">{{ $item->pengguna->id_pengguna }}</td>
                <td class="col-2">{{ $item->kelas }}</td>
                <td class="col-1">{{ $item->harga }}</td>
            </tr>
            <?php $i++; ?>
        @endforeach
        </tbody>
    </table>
</body>
</html>