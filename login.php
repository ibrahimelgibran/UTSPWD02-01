<?php

require 'config.php';

$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM tbl_users WHERE email = '$email' AND password ='$password'";

$result = mysqli_query($koneksi, $query_sql);
if (mysqli_num_rows($result) > 0) {
    header("Location: home.php");
} else {
   header("Location: ./page/gagal_login.php?app=gagal");
}

?>