<!DOCTYPE html>
<html>
    <head>
        <title>Menampilkan Data Mahasiswa</title>
    </head>
    <body>
        <h1>Data Mahasiswa</h1>
        <button style="background-color: blue; margin-bottom: 5px;"><a href="form_tambah.php">Tambah</a></button>
        <table border="1">
            <tr bgcolor="yellow">
                <th>No</th>
                <th>Min</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th>Hp</th>
                <th>Aksi</th>
            </tr>
            <?php
            include"koneksi.php";

            $no =1;
            $data = mysqli_query($koneksi,"SELECT * FROM  tb_mhs");
            while ($hasil= mysqli_fetch_array($data)) {
                ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $hasil['nim']; ?></td>
                <td><?php echo $hasil['nama']; ?></td>
                <td><?php echo $hasil['jenis kelamin']; ?></td>
                <td><?php echo $hasil['jurusan']; ?></td>
                <td><?php echo $hasil['alamat']; ?></td>
                <td><?php echo $hasil['hp']; ?></td>
                <td>
                    <a href="ubah.php?id=<?php echo$hasil['nim'] ?>"> Ubah </a> ||
                    <a href=""> Hapus </a>
                </td>
            </tr>
            <?php
            }
        ?>
    </body>
</html>

