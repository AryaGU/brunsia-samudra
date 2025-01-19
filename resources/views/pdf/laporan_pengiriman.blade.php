<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pengiriman</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Laporan Pengiriman</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Negara Pengirim</th>
                <th>Nama Pengirim</th>
                <th>Nama Penerima</th>
                <th>Bank Penerima</th>
                <th>Nomor Rekening</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengiriman as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->negara_pengirim }}</td>
                    <td>{{ $data->nama_pengirim }}</td>
                    <td>{{ $data->nama_penerima }}</td>
                    <td>{{ $data->bank_penerima }}</td>
                    <td>{{ $data->nomor_rekening }}</td>
                    <td>{{ $data->alamat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
