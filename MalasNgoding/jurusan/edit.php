<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA JURUSAN - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA JURUSAN</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id_jur'];
	$data = mysqli_query($koneksi,"select * from jurusan where id_jurusan='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama jurusan</td>
					<td>
						<input type="hidden" name="id_jurusan" value="<?php echo $d['id_jurusan']; ?>">
						<input type="text" name="nama_jurusan" value="<?php echo $d['nama_jurusan']; ?>">
					</td>
				</tr>
				<tr>
					<td>Email Jurusan</td>
					<td><input type="text" name="email_jurusan" value="<?php echo $d['email_jurusan']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>