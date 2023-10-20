<?php
// Koneksi ke database (sesuaikan dengan koneksi Anda)
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$utsweb = "crud";
$conn = new mysqli($servername, $utsweb); // Ganti "username" dan "password" dengan informasi login database Anda.

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Tangkap data yang diedit dari formulir
$id = $_POST['id']; // ID dari data yang akan di-update (pastikan Anda telah memvalidasi dan membersihkan data ini)
$prodi = $_POST['prodi'];
$nm_matkul = $_POST['nm_matkul'];
$kd_matkul = $_POST['kd_matkul'];
$penyusun = $_POST['penyusun'];

// Update data dalam database
$sql = "UPDATE crud SET prodi = '$prodi', nm_matkul = '$nm_matkul', kd_matkul = '$kd_matkul', penyusun = '$penyusun' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil di-update.";
} else {
    echo "Terjadi kesalahan: " . $conn->error;
}

$conn->close();
?>
