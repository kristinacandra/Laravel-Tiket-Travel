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
    <h1 class="text-center">DATA PENGGUNA</h1>
    <table id="customers">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Id Pengguna</th>
                <th scope="col">Nama Pengguna</th>
                <th scope="col">Alamat</th>
                <th scope="col">No Telpon</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach ($data as $item)
                <tr>
                    <td class="col-1">{{ $i++ }}</td>
                    <td class="col-2">{{ $item->id_pengguna }}</td>
                    <td class="col-2">{{ $item->nama_pengguna }}</td>
                    <td class="col-2">{{ $item->alamat }}</td>
                    <td class="col-2">{{ $item->no_telp }}</td>
                </tr>               
            @endforeach
        </tbody>
    </table>
</body>
</html>