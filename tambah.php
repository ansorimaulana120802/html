<?php
    include "koneksi.php"

    if isset($_POST['simpan']){
        $nim=$_POST['nim'];
        $nama=$_POST['nama'];
        $jenkel=$_POST['jenkel'];
            if($jenkel ="perempuan"){
                echo "perempuan";
            }else{
                echo "laki-laki";
            }
        $jurusan=$_POST['jurusan'];
        $alt=$_POST['alamat'];
        $hp=$_POST['hp'];

        $sql ="INSERT INTO tb_mhs(nim,nama,jenkel,jurusan,alamat,hp)VALUES('$nim','$nama','$jenkel','$jurusan','$alt','$hp')";
        //Cek apakah proses simpan berhasil
        if(mysqli_query($koneksi, $sql)){
        //jika berhasil, redirect ke index.php
            header('location:index.php');
        }else{
            //jika tidak berhasil
            echo "Oupss.... Maaf proses penyimpanan data tidak berhasil";
        }

    }
?>