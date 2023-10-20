<?php
// Koneksi ke database (sesuaikan dengan koneksi Anda)
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$utsweb = "crud";
$conn = new mysqli($servername, $utsweb);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Tangkap data dari formulir dan pastikan untuk memvalidasi/membersihkan data (tidak disertakan dalam contoh ini)
$prodi = $_POST['prodi'];
$nm_matkul = $_POST['nm_matkul'];
$kd_matkul = $_POST['kd_matkul'];
$penyusun = $_POST['penyusun'];

// Simpan data ke database
$sql = "INSERT INTO crud (prodi, nm_matkul, kd_matkul, penyusun) VALUES ('$prodi', '$nm_matkul', '$kd_matkul', '$penyusun')";

if ($conn->query($sql) === TRUE) {
    header("Location: create_rps.html");
    exit;
} else {
    echo "Terjadi kesalahan: " . $conn->error;
}

$conn->close();
?>
