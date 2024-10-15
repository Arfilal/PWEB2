
# PHP OOP PERTEMUAN 1 dan 2

## 1. Pembuatan Kelas

### Kelas Mahasiswa

```php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode-metode lain...
}
```

Penjelasan:
- Kelas `Mahasiswa` didefinisikan dengan tiga properti publik: `$nama`, `$nim`, dan `$jurusan`.
- Konstruktor (`__construct`) digunakan untuk menginisialisasi objek dengan nilai-nilai awal.
- `$this` mengacu pada instance objek saat ini.

### Kelas Dosen

```php
class Dosen {
    public $nama;
    public $nip;
    public $mataKuliah;

    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    // Metode lain...
}
```

Penjelasan:
- Kelas `Dosen` memiliki struktur serupa dengan `Mahasiswa`, dengan properti yang sesuai untuk dosen.
- Konstruktor digunakan untuk inisialisasi objek dosen.

## 2. Penggunaan Metode

### Metode dalam Kelas Mahasiswa

1. `tampilkandata()`
   ```php
   public function tampilkandata() {
       return "$this->nama, $this->nim, $this->jurusan";
   }
   ```
   - Metode ini mengembalikan string yang berisi informasi mahasiswa.

2. `updatejurusan($jurusan_baru)`
   ```php
   public function updatejurusan($jurusan_baru) {
       $this->jurusan = $jurusan_baru;
   }
   ```
   - Metode ini memperbarui jurusan mahasiswa.

3. `setnim($nim)`
   ```php
   public function setnim($nim) {
       $this->nim = $nim;
   }
   ```
   - Metode ini mengatur NIM baru untuk mahasiswa.

### Metode dalam Kelas Dosen

1. `tampilkanDosen()`
   ```php
   public function tampilkanDosen() {
       return "$this->nama, $this->nip, $this->mataKuliah";
   }
   ```
   - Metode ini mengembalikan string yang berisi informasi dosen.

## 3. Penggunaan Kelas dan Metode

### Penggunaan Kelas Mahasiswa

```php
$mahasiswa1 = new Mahasiswa("Arfilal Faiznadi", "230302053", "Teknik Informatika");
echo $mahasiswa1->tampilkandata();
$mahasiswa1->updatejurusan("Teknik Elektro");
$mahasiswa1->setnim("238129567");
echo $mahasiswa1->tampilkandata();
```

Penjelasan:
1. Objek `$mahasiswa1` dibuat dengan data awal.
2. Data awal ditampilkan menggunakan `tampilkandata()`.
3. Jurusan diperbarui menggunakan `updatejurusan()`.
4. NIM diperbarui menggunakan `setnim()`.
5. Data yang diperbarui ditampilkan kembali.

### Penggunaan Kelas Dosen

```php
$Dosen1 = new Dosen("Abda'u", "123456789", "PWEB2");
echo $Dosen1->tampilkanDosen();
```

Penjelasan:
1. Objek `$Dosen1` dibuat dengan data dosen.
2. Data dosen ditampilkan menggunakan `tampilkanDosen()`.

## 4. Hasil Output

Berikut adalah hasil output yang diharapkan dari eksekusi kode:

<img src = "image/image1.png">
```

Penjelasan output:
1. Data mahasiswa awal ditampilkan, menunjukkan nama, NIM, dan jurusan asli.
2. Setelah pembaruan, data mahasiswa yang diperbarui ditampilkan dengan NIM dan jurusan yang baru.
3. Data dosen ditampilkan, menunjukkan nama, NIP, dan mata kuliah yang diajar.

## Kesimpulan

Kode ini mendemonstrasikan konsep dasar OOP dalam PHP:
- Enkapsulasi: Data dan metode dikelompokkan dalam kelas.
- Konstruktor: Digunakan untuk inisialisasi objek.
- Metode: Fungsi-fungsi yang memanipulasi data objek.
- Instansiasi objek: Pembuatan instance dari kelas.

test