# PHP OOP Pertemuan 3 dan 4

Proyek ini adalah implementasi sistem akademik sederhana menggunakan PHP dengan pendekatan Pemrograman Berorientasi Objek (OOP). Sistem ini mencakup manajemen data mahasiswa dan dosen.

## Struktur Proyek

Proyek ini terdiri dari satu file PHP utama yang berisi definisi kelas dan demonstrasi penggunaan:

- `jobsheet2.php`: File utama yang berisi semua kode.

## Penjelasan Kode

### 1. Kelas Mahasiswa

```php
class Mahasiswa {
    private $nama;
    private $nim;
    private $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        // Inisialisasi properti
    }

    public function tampilkanData() {
        // Menampilkan data mahasiswa
    }

    // Getter dan Setter untuk encapsulation
    public function getNama() { /* ... */ }
    public function setNama($nama) { /* ... */ }
    public function getNim() { /* ... */ }
    public function setNim($nim) { /* ... */ }
    public function getJurusan() { /* ... */ }
    public function setJurusan($jurusan) { /* ... */ }

    public function aksesFitur() {
        // Implementasi polymorphism
    }
}
```

Kelas `Mahasiswa` merepresentasikan entitas mahasiswa dengan properti dan metode terkait. Kelas ini mendemonstrasikan konsep encapsulation dengan menggunakan properti private dan metode getter/setter.

### 2. Kelas Abstrak Pengguna

```php
abstract class Pengguna {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    abstract public function aksesFitur();
}
```

Kelas abstrak `Pengguna` berfungsi sebagai dasar untuk semua jenis pengguna dalam sistem. Ini mendemonstrasikan konsep abstraksi dan inheritance.

### 3. Kelas Dosen

```php
class Dosen extends Pengguna {
    private $mataKuliah;

    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    public function getMataKuliah() {
        return $this->mataKuliah;
    }

    public function tampilkanData() {
        // Menampilkan data dosen
    }

    public function aksesFitur() {
        // Implementasi polymorphism
    }
}
```

Kelas `Dosen` merupakan turunan dari kelas `Pengguna` dan merepresentasikan entitas dosen. Ini mendemonstrasikan konsep inheritance dan polymorphism.

## Cara Penggunaan

1. Buat objek Mahasiswa:
   ```php
   $mahasiswa1 = new Mahasiswa("Arfilal Faiznadi", "230302053", "Teknik Informatika");
   ```

2. Tampilkan dan update data mahasiswa:
   ```php
   echo $mahasiswa1->tampilkanData();
   $mahasiswa1->setNama("Budi Yono Siregar");
   $mahasiswa1->setNim("987654321");
   $mahasiswa1->setJurusan("Kapal Laut");
   ```

3. Buat objek Dosen:
   ```php
   $dosen = new Dosen("Pak Abda'u", "PWEB2");
   ```

4. Tampilkan data dosen:
   ```php
   echo "Nama: " . $dosen->getNama() . "<br>";
   echo "Mata Kuliah: " . $dosen->getMataKuliah() . "<br>";
   ```

## Hasil Output

Setelah menjalankan kode, output yang dihasilkan akan terlihat seperti ini:

![Screenshot 2024-10-15 081612](https://github.com/user-attachments/assets/5223f77c-58d9-47f2-bfd0-04ca7b790273)


Dosen mengakses fitur penilaian mahasiswa.
```

Hasil output ini menunjukkan bagaimana data mahasiswa dan dosen dapat dimanipulasi dan ditampilkan menggunakan metode-metode yang telah didefinisikan dalam kelas masing-masing.

---

Proyek ini mendemonstrasikan penggunaan konsep-konsep OOP dalam PHP, termasuk:
- Encapsulation (dengan properti private dan metode getter/setter)
- Inheritance (Dosen mewarisi dari Pengguna)
- Polymorphism (implementasi berbeda untuk metode `aksesFitur()`)
- Abstraction (penggunaan kelas abstrak Pengguna)

