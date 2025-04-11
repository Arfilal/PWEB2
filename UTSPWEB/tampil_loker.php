<?php
include_once 'loker_buku.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables Bootstrap 5 CSS -->
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tampil_buku.php">Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Loker</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php
$loker_buku = new Loker();
?>

<div class="container mt-5">
    <div class="text-center mb-4">
        <h2 class="fw-bold">Data Loker Buku Perpustakaan</h2>
    </div>
    
    <div class="card shadow-sm">
        <div class="card-body">
            <?php
            $data_buku = $loker_buku->tampilDataBuku("Buku Resep Masakan");
            if($data_buku){
            ?>
            <div class="table-responsive">
                <table id="lokerTable" class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Loker</th>
                            <th>Judul</th>
                            <th>Nama Pengarang</th>
                            <th>Tahun Terbit</th>
                            <th>Penerbit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($data_buku as $row){
                        ?>
                        <tr>
                            <td><?=$row['loker_buku']?></td>
                            <td><?=$row['judul_buku']?></td>
                            <td><?=$row['nama_pengarang']?></td>
                            <td><?=$row['tahun_terbit']?></td>
                            <td><?=$row['penerbit']?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <?php
            } else {
            ?>
            <div class="alert alert-info text-center">
                Data Tidak Ditemukan
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
<!-- DataTables Scripts -->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#lokerTable').DataTable({
            language: {
                search: "Cari:",
                lengthMenu: "Tampilkan _MENU_ data per halaman",
                zeroRecords: "Tidak ada data yang ditemukan",
                info: "Menampilkan halaman _PAGE_ dari _PAGES_",
                infoEmpty: "Tidak ada data yang tersedia",
                infoFiltered: "(difilter dari _MAX_ total data)",
                paginate: {
                    first: "Pertama",
                    last: "Terakhir",
                    next: "Selanjutnya",
                    previous: "Sebelumnya"
                }
            }
        });
    });
</script>
</body>
</html>