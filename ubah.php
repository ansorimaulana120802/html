<?php
include "koneksi.php";
$id= $_GET['id'];
$data= mysqli_query($koneksi,"SELECT * FROM tb_mhs where nim='$id'");
while($hasil= mysqli_fetch_array($data)){
$jenkel = $hasil['jenkel'];
?>

<html>
    <head>
        <title>Mengubah Data Mahasisawa</title>
    </head>
    <body>
        <h1>Ubah Data</h1>
        <form method="post" action="">
            <label>Nim</label><br>
            <input type="text" name="nim" value="<?php echo $hasil['nim'];?>"><br>
            <label>Nama</label><br>
            <input type="text" name="nama" value="<?php echo $hasil['nama'];?>"><br>
            <label>Jenis Kelamin</label><br>
            <input type="radio" name="jenis kelamin" value ="Perempuan"<?php if($jenkel =='Perempuan'){echo "checked";}?>>Perempuan
            <input type="radio" name="jenis kelamin" value ="Laki-laki"<?php if($jenkel =='Laki-laki'){echo "checked";}?>>Laki-laki<br>
            <label>Jurusan</label><br>
            <input type="text" name="jurusan" value="<?php echo $hasil['jurusan'];?>"><br>
            <label>Alamat</label><br>
            <input type="text" name="alamat" value="<?php echo $hasil['alamat'];?>"><br>
            <label>No.Hp</label><br>
            <input type="text" name="hp" value="<?php echo $hasil['hp'];?>"><br><br>
            <button type="submit" name="simpan">Simpan</button>
        </form>
        <?php  
        }
        ?>     
    </body>
</html>
