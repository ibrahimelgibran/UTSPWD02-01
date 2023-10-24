<?php
include('config.php');

try {

// cek tombol simpan
if(isset($_POST['edit'], $_GET['nim'])){

    // ambil data dari form
    $nim = $_POST['nim'];
    $nm = $_POST['nama_mahasiswa'];
    $jdl = $_POST['judul_mahasiswa'];
    $des = $_POST['deskripsi_mahasiswa'];
    $pr = $_POST['prodi_mahasiswa'];

    // buat query update
    $sql = "UPDATE tb_mahasiswa SET nim_mhs=$nim, nm_mhs='$nm', jdl_mhs='$jdl', des_mhs='$des', pr_mhs='$pr' WHERE nim_mhs='{$_GET['nim']}'";
    $query = mysqli_query($koneksi, $sql);

    // query update berhasil?
    if( $query ) {
        // kalau berhasil menampilkan status=sukses
        header('location:./view_data.php');
    } else {
        // kalau gagal tampilkan pesan
        die('Gagal menyimpan perubahan...');
    }
} else {
    die("Akses dilarang...");
}

} catch (Exception $e) {
    die($e->getMessage());
}
?>