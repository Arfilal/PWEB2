<?php

// 1. Membuat Class dan Object
class Mahasiswa {
    private $nama;
    private $nim;
    private $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData() {
        return "Nama: {$this->nama}, NIM: {$this->nim}, Jurusan: {$this->jurusan}";
    }

    // 2. Encapsulation: Getter dan Setter
    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getNim() {
        return $this->nim;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function getJurusan() {
        return $this->jurusan;
    }

    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    // 4. Polymorphism
    public function aksesFitur() {
        return "Mahasiswa mengakses fitur pembelajaran online.";
    }
}

// 3. Inheritance
abstract class Pengguna {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    // 5. Abstraction
    abstract public function aksesFitur();
}

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
        return "Nama Dosen: {$this->nama}, Mata Kuliah: {$this->mataKuliah}";
    }

    // 4. Polymorphism
    public function aksesFitur() {
        return "Dosen mengakses fitur penilaian mahasiswa.";
    }
}

echo "1. Membuat Class dan Object:\n";
$mahasiswa1 = new Mahasiswa("Budi Santoso", "12345", "Teknik Informatika");
echo $mahasiswa1->tampilkanData() . "\n\n";

echo "2. Encapsulation:\n";
$mahasiswa1->setNama("Budi Prasetyo");
echo "Nama baru: " . $mahasiswa1->getNama() . "\n\n";

echo "3. Inheritance:\n";
$dosen1 = new Dosen("Dr. Siti Aisyah", "Pemrograman Web");
echo $dosen1->tampilkanData() . "\n\n";

echo "4. Polymorphism:\n";
echo "Mahasiswa: " . $mahasiswa1->aksesFitur() . "\n";
echo "Dosen: " . $dosen1->aksesFitur() . "\n\n";

echo "5. Abstraction:\n";
$pengguna1 = $mahasiswa1;
$pengguna2 = $dosen1;
echo "Pengguna 1 (Mahasiswa): " . $pengguna1->aksesFitur() . "\n";
echo "Pengguna 2 (Dosen): " . $pengguna2->aksesFitur() . "\n";