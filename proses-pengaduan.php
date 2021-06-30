<?php

include("config.php");

if(isset($_POST['daftar'])){

    $pengaduan = $_POST['pengaduan'];
    $nama = $_POST['nama'];

    $sql = "INSERT INTO data_pengaduan (pengaduan, nama) VALUE ('$pengaduan', '$nama')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        
        header('Location: form-pengaduan.php?status=sukses');
    } else {
        
        header('Location: form-pengaduan.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>