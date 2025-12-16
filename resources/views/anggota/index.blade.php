<!DOCTYPE html>
<html>
<head>
    <title>Data Anggota</title>
</head>
<body>

<h2>Daftar Anggota</h2>

<table border="1" cellpadding="5">
    <tr>
        <th>Nomor Anggota</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Tanggal Lahir</th>
    </tr>

    @foreach ($data as $a)
    <tr>
        <td>{{ $a->nomor_anggota }}</td>
        <td>{{ $a->nama }}</td>
        <td>{{ $a->alamat }}</td>
        <td>{{ $a->email }}</td>
        <td>{{ $a->tanggal_lahir }}</td>
    </tr>
    @endforeach
</table>

<br>
<a href="/anggota/create">Tambah Anggota</a>

</body>
</html>
