<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_jur'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from jurusan where id_jurusan='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>