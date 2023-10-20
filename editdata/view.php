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

// Ambil data dari database (misalnya, berdasarkan ID)
$id = $_GET['id'];
$sql = "SELECT * FROM crud WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $prodi = $row['prodi'];
    $nm_matkul = $row['nm_matkul'];
    $kd_matkul = $row['kd_matkul'];
    $penyusun = $row['penyusun'];
} else {
    echo "Data tidak ditemukan.";
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Informasi RPS</title>
</head>
<body>
    <h3>Informasi Header RPS (Edit)</h3>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- Input tersembunyi untuk mengirimkan ID -->
        <div class="form-group">
            <label for="prodi">Nama Prodi:</label>
            <input type="text" class="form-control" id="prodi" name="prodi" value="<?php echo $prodi; ?>">
        </div>
        <div class="form-group">
            <label for="nm_matkul">Nama Matakuliah:</label>
            <input type="text" class="form-control" id="nm_matkul" name="nm_matkul" value="<?php echo $nm_matkul; ?>">
        </div>
        <div class="form-group">
            <label for="kd_matkul">Kode Matakuliah:</label>
            <input type="text" class="form-control" id="kd_matkul" name="kd_matkul" value="<?php echo $kd_matkul; ?>">
        </div>
        <div class="form-group">
            <label for="penyusun">Nama Penyusun:</label>
            <input type="text" class="form-control" id="penyusun" name="penyusun" value="<?php echo $penyusun; ?>">
        </div>
        <button type="submit" class="btn btn-default">Simpan Perubahan</button>
    </form>
</body>
</html>
