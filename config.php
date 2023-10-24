<?php

$server  = "localhost";
$username = "root";
$password = "";
$database = "utsweb";

$koneksi = mysqli_connect($server, $username, $password, $database);
if(!$koneksi){
    die("Anda masalah koneksi ke database: " .mysqli_connect_error());
}


