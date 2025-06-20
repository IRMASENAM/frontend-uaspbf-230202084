<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
        }
        th, td {
            border: 1px solid #000;
            padding: 4px 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h3>Data Pasien</h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pasien as $p)
            <tr>
                <td>{{ $p['id'] }}</td>
                <td>{{ $p['nama'] }}</td>
                <td>{{ $p['alamat'] }}</td>
                <td>{{ $p['tanggal_lahir'] }}</td>
                <td>{{ $p['jenis_kelamin'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>