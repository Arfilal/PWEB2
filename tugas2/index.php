
<!DOCTYPE html>
<html>
<head>
	<title>DATA NILAI PERBAaIaKAN</title>
</head>
<body>
 
	<h2>DATA NILAI PERBAIKAaNn</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH MAHASISWA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Mahasiswa</th>
			<th>Nama_mhs</th>
			<th>Alamat</th>
			<th>Email</th>
			<th>No_telp</th>
			
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($connection,"select * from ");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['mahasiswa']; ?></td>
				<td><?php echo $d['nim']; ?></td>
				<td><?php echo $d['nama_mhs']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['no_telp']; ?></td>
				
				
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>