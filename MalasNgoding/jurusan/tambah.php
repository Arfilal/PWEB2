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
	<h3>TAMBAH DATA JURUSAN</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama jurusan</td>
				<td><input type="text" name="nama_jurusan"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email_jurusan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
                <td><input type="reset" value="RESET"></td>
			</tr>		
		</table>
	</form>
</body>
</html>