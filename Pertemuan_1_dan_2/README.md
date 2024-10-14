# PHP OOP Pertemuan 1 dan 2

## 1. Pembuatan Kelas

### 1.1 Kelas Mahasiswa

Kelas `Mahasiswa` didefinisikan dengan properti dan metode berikut:

#### Properti:
- `$nama`: Nama mahasiswa
- `$nim`: Nomor Induk Mahasiswa
- `$jurusan`: Jurusan mahasiswa

#### Metode:
- `__construct()`: Metode konstruktor untuk menginisialisasi objek
- `tampilkandata()`: Metode untuk menampilkan data mahasiswa
- `updatejurusan()`: Metode untuk memperbarui jurusan mahasiswa
- `setnim()`: Metode untuk mengatur NIM baru

### 1.2 Kelas Dosen

Kelas `Dosen` didefinisikan dengan properti dan metode berikut:

#### Properti:
- `$nama`: Nama dosen
- `$nip`: Nomor Induk Pegawai dosen
- `$mataKuliah`: Mata kuliah yang diajar oleh dosen

#### Metode:
- `__construct()`: Metode konstruktor untuk menginisialisasi objek
- `tampilkanDosen()`: Metode untuk menampilkan data dosen

## 2. Penggunaan Metode dengan Komentar

### 2.1 Metode Kelas Mahasiswa

```php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    // Konstruktor untuk menginisialisasi objek Mahasiswa
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkandata() {
        return "$this->nama, $this->nim, $this->jurusan";
    }

    // Metode untuk memperbarui jurusan mahasiswa
    public function updatejurusan($jurusan_baru) {
        $this->jurusan = $jurusan_baru;
    }

    // Metode untuk mengatur NIM baru
    public function setnim($nim) {
        $this->nim = $nim;
    }
}

// Membuat objek Mahasiswa dan menampilkan data awal
$mahasiswa1 = new Mahasiswa("Arfilal Faiznadi", "230302053", "Teknik Informatika");
echo "Data mahasiswa awal: <br>";
echo $mahasiswa1->tampilkandata() . "<br><br>";

// Memperbarui data mahasiswa dan menampilkan data yang diperbarui
echo "Data mahasiswa update: <br>";
$mahasiswa1->updatejurusan("Teknik Elektro");
$mahasiswa1->setnim("238129567");
echo $mahasiswa1->tampilkandata(). "<br><br>";
```

### 2.2 Metode Kelas Dosen

```php
class Dosen {
    public $nama;
    public $nip;
    public $mataKuliah;

    // Konstruktor untuk menginisialisasi objek Dosen
    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    // Metode untuk menampilkan data dosen
    public function tampilkanDosen() {
        return "$this->nama, $this->nip, $this->mataKuliah";
    }
}

// Membuat objek Dosen dan menampilkan datanya
echo "Data dosen: <br>";
$Dosen1 = new Dosen("Abda'u", "123456789", "PWEB2");
echo $Dosen1->tampilkanDosen() . "<br>";
```

## 3. Hasil Output

Script ini akan menghasilkan output sebagai berikut:

![Screenshot 2024-10-14 212826](https://github.com/user-attachments/assets/fa520ec0-81d6-4c11-8c4c-872f0bd8f0dc)

```

Output ini menunjukkan:
1. Data awal mahasiswa
2. Data mahasiswa yang telah diperbarui setelah mengubah jurusan dan NIM
3. Data dosen
