<?php
$server = "localhost"; //nama server
$username = "root"; // username 
$password = ""; //  standarnya kosong
$database = "dbcrud"; // buat nama database harus sama 

$connection = mysqli_connect($server, $username, $password, $database);

if($connection) {
    echo "Koneksi Berhasil!";
} else {
    echo "Koneksi Gagal! : ". mysqli_connect_error();
}
?>