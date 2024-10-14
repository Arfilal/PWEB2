# Sistem Manajemen Mahasiswa dan DOSEN PHP

## Ikhtisar
Proyek ini Menerapkan Sistem Manajemen Mahasiswa dan Dosen sederhana dalam PHP. Ini mencakup kelas-kelas untuk mengelola data mahasiswa dan dosen.

## Fitur
- Membuat dan mengelola catatan mahasiswa 
- Memperbarui informasi mahasiswa (jurusan dan NIM) 
- Membuat dan menampilkan informasi dosen

## Struktur Kelas

### Kelas Mahasiswa
Kelas `Mahasiswa` merepresentasikan seorang mahasiswa dan memiliki properti serta metode berikut:

#### Properti:
- `$nama`: Nama mahasiswa
- `$nim`: Nomor Induk Mahasiswa (NIM)
- `$jurusan`: Jurusan mahasiswa

#### Metode:
- `__construct($nama, $nim, $jurusan)`: Konstruktor untuk menginisialisasi objek mahasiswa
- `tampilkandata()`: Menampilkan informasi mahasiswa
- `updatejurusan($jurusan_baru)`: Memperbarui jurusan mahasiswa
- `setnim($nim)`: Memperbarui NIM mahasiswa

### Kelas Dosen
Kelas `Dosen` merepresentasikan seorang dosen dan memiliki properti serta metode berikut:

#### Properti:
- `$nama`: Nama dosen
- `$nip`: Nomor Induk Pegawai (NIP) dosen
- `$mataKuliah`: Mata kuliah yang diajar oleh dosen

#### Metode:
- `__construct($nama, $nip, $mataKuliah)`: Konstruktor untuk menginisialisasi objek dosen
- `tampilkanDosen()`: Menampilkan informasi dosen

## Penggunaan

### Membuat dan Menampilkan Data Mahasiswa
```php
$mahasiswa1 = new Mahasiswa("Arfilal Faiznadi", "230302053", "Teknik Informatika");
echo $mahasiswa1->tampilkandata();
```

### Memperbarui Informasi Mahasiswa
```php
$mahasiswa1->updatejurusan("Teknik Elektro");
$mahasiswa1->setnim("238129567");
echo $mahasiswa1->tampilkandata();
```

### Membuat dan Menampilkan Data Dosen
```php
$Dosen1 = new Dosen("Abda'u", "123456789", "PWEB2");
echo $Dosen1->tampilkanDosen();
```

## Contoh output
```
data mahasiswa awal
Arfilal Faiznadi, 230302053, Teknik Informatika

data mahasiswa update
Arfilal Faiznadi, 238129567, Teknik Elektro

data dosen
Abda'u, 123456789, PWEB2
```
