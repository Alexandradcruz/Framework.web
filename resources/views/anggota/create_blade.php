<!DOCTYPE html>
<html>
<head>
    <title>Input Anggota</title>
</head>
<body>

<h2>Form Input Anggota</h2>

<form action="{{ route('anggota.store') }}" method="POST">
    @csrf


    <label>Nomor Anggota (NIM):</label><br>
    <input type="text" name="nomor_anggota" required><br><br>

    <label>Nama:</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Alamat:</label><br>
    <input type="text" name="alamat" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Tanggal Lahir:</label><br>
    <input type="date" name="tanggal_lahir" required><br><br>

    <button type="submit">Simpan</button>
</form>

</body>
</html>
