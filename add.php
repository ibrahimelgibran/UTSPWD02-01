<?php

require_once 'config.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check tombol daftar
if(isset($_POST['daftar'])){
    // take data dari form
    $nik = $_POST['nik'];
    $nm = $_POST['nama_mahasiswa'];
    $jdl = $_POST['judul_mahasiswa'];
    $des = $_POST['deskripsi_mahasiswa'];
    $pr = $_POST['prodi_mahasiswa'];

    // buat query
    $sql = "INSERT INTO tb_mahasiswa (nim_mhs, nm_mhs, jdl_mhs, des_mhs, pr_mhs) VALUES ('$nik', '$nm', '$jdl', '$des', '$pr')";   
    $query = mysqli_query($koneksi, $sql);

    // query save sudah berhasil
    if($query){
        header("Location: ./form_add.php?app=berhasil");
    } else {
        header("Location: ./form_add.php?app=Gagal");
    }
}else {
    die("Akses dilarang...");
}


?>