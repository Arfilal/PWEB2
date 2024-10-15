# PHP OOP PERTEMUAN 1 dan 2

Proyek ini merupakan implementasi sederhana sistem manajemen data mahasiswa dan dosen menggunakan PHP dengan pendekatan Pemrograman Berorientasi Objek (OOP).

## Deskripsi

Sistem ini terdiri dari dua kelas utama: `Mahasiswa` dan `Dosen`. Setiap kelas memiliki properti dan metode yang memungkinkan pengelolaan data masing-masing entitas.

### Kelas Mahasiswa

Kelas `Mahasiswa` memiliki properti:
- nama
- nim
- jurusan

Metode-metode dalam kelas `Mahasiswa`:
- `__construct()`: Konstruktor untuk inisialisasi objek
- `tampilkandata()`: Menampilkan data mahasiswa
- `updatejurusan()`: Memperbarui jurusan mahasiswa
- `setnim()`: Mengatur NIM baru untuk mahasiswa

### Kelas Dosen

Kelas `Dosen` memiliki properti:
- nama
- nip
- mataKuliah

Metode dalam kelas `Dosen`:
- `__construct()`: Konstruktor untuk inisialisasi objek
- `tampilkanDosen()`: Menampilkan data dosen

## Penggunaan

Berikut adalah contoh penggunaan kelas-kelas tersebut:

```php
// Membuat objek mahasiswa
$mahasiswa1 = new Mahasiswa("Arfilal Faiznadi", "230302053", "Teknik Informatika");

// Menampilkan data awal
echo "Data mahasiswa awal:";
echo $mahasiswa1->tampilkandata();

// Memperbarui data
$mahasiswa1->updatejurusan("Teknik Elektro");
$mahasiswa1->setnim("238129567");

// Menampilkan data yang diperbarui
echo "Data mahasiswa setelah diperbarui:";
echo $mahasiswa1->tampilkandata();

// Membuat objek dosen
$Dosen1 = new Dosen("Abda'u", "123456789", "PWEB2");

// Menampilkan data dosen
echo "Data dosen:";
echo $Dosen1->tampilkanDosen();
```

## Hasil Output

Setelah menjalankan kode di atas, output yang dihasilkan akan seperti ini:

![Screenshot 2024-10-14 212826](https://github.com/user-attachments/assets/255ba160-5b6c-48b7-a0d2-453e36f8aef7)

