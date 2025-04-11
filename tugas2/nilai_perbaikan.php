<!DOCTYPE html>
<html>
<head>
	<title>DATA NILAI PERBAIKAN</title>
</head>
<body>
 
	<h2>DATA NILAI PERBAIKAN</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>UPDATE NILAI PERBAIKAN</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>perbaikan</td>
				<td><input type="int" name="perbaikan"></td>
			</tr>
			<tr>
				<td>tgl_perbaikan</td>
				<td><input type="date" name="tgl_perbaikan"></td>
			</tr>
			
			<tr>
				<td>keterangan</td>
				<td><input type="varchar" name="keterangan"></td>
			</tr>
            <tr>
				<td>mahasiswa_id</td>
				<td><input type="int" name="mahasiswa_id"></td>
			</tr>
            <tr>
				<td>matkul_id</td>
				<td><input type="int" name="matkul_id"></td>
			</tr>
            <tr>
				<td>semester_id</td>
				<td><input type="int" name="semester_id"></td>
			</tr>
            <tr>
				<td>nilai_id</td>
				<td><input type="int" name="nilai_id"></td>
			</tr>
            <tr>
				<td>dosen_id</td>
				<td><input type="int" name="dosen_id"></td>
			</tr>
		
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
				<td><input type="RESET" value="Riset"></td>
			</tr>		
		</table>
	</form>
</body>
</html>