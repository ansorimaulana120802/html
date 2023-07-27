<!DOCTYPE html>
<html>
    <head>
        <title>Menambah Data Mahasisawa</title>
    </head>
    <body>
        <h1>Tambah Data</h1>
        <form method="post" action="tambah.php">
            <label>Nim</label><br>
            <input type="text" name="nim"><br>
            <label>Nama</label><br>
            <input type="text" name="nama"><br>
            <label>Jenis Kelamin</label><br>
            <input type="radio" name="jenis kelamin" value ="Perempuan">Perempuan
            <input type="radio" name="jenis kelamin" value ="Laki-laki">Laki-laki<br>
            <label>Jurusan</label><br>
            <input type="text" name="jurusan"><br>
            <label>Alamat</label><br>
            <input type="text" name="alamat"><br>
            <label>No.Hp</label><br>
            <input type="text" name="hp"><br><br>
            <button type="submit" name="simpan">Simpan</button>
        </form>
    </body>
</html>
