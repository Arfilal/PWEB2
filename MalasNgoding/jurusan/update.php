<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id_jurusan'];
$nama_jurusan = $_POST['nama_jurusan'];
$email_jurusan = $_POST['email_jurusan'];
 
// update data ke database
mysqli_query($koneksi,"update jurusan set  nama_jurusan='$nama_jurusan', email_jurusan='$email_jurusan' where id_jurusan='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>