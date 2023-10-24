<?php
include('config.php');

if (isset($_GET['nim'])) {
    $nik = $_GET['nim'];
    $query = "DELETE FROM tb_mahasiswa WHERE nim_mhs = $nik";

    if (mysqli_query($koneksi, $query)) {
        header('location:./view_data.php?=berhasil');
    } else {
        echo "Gagal menghapus" . mysqli_error($koneksi);
    }
}