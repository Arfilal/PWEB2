<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama_jurusan = $_POST['nama_jurusan'];
$email_jurusan = $_POST['email_jurusan'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into jurusan values('','$nama_jurusan','$email_jurusan')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>