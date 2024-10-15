<?php

// Class Mahasiswa: Representasi data dan perilaku mahasiswa
class Mahasiswa {
    private $nama;
    private $nim;
    private $jurusan;

    /**
     * Constructor: Menginisialisasi objek Mahasiswa dengan data awal
     * @param string $nama Nama mahasiswa
     * @param string $nim NIM mahasiswa
     * @param string $jurusan Jurusan mahasiswa
     */
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    /**
     * Menampilkan data mahasiswa dalam format yang mudah dibaca
     * @return string Data mahasiswa terformat
     */
    public function tampilkanData() {
        return "Nama: {$this->nama} <br>  NIM: {$this->nim} <br>  Jurusan: {$this->jurusan} <br>";
    }

    // Getter dan Setter untuk encapsulation

    /**
     * Mengambil nama mahasiswa
     * @return string Nama mahasiswa
     */
    public function getNama() {
        return $this->nama;
    }

    /**
     * Mengatur nama mahasiswa
     * @param string $nama Nama baru mahasiswa
     */
    public function setNama($nama) {
        $this->nama = $nama;
    }

    /**
     * Mengambil NIM mahasiswa
     * @return string NIM mahasiswa
     */
    public function getNim() {
        return $this->nim;
    }

    /**
     * Mengatur NIM mahasiswa
     * @param string $nim NIM baru mahasiswa
     */
    public function setNim($nim) {
        $this->nim = $nim;
    }

    /**
     * Mengambil jurusan mahasiswa
     * @return string Jurusan mahasiswa
     */
    public function getJurusan() {
        return $this->jurusan;
    }

    /**
     * Mengatur jurusan mahasiswa
     * @param string $jurusan Jurusan baru mahasiswa
     */
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    /**
     * Implementasi polymorphism: Menjelaskan akses fitur untuk mahasiswa
     * @return string Deskripsi akses fitur mahasiswa
     */
    public function aksesFitur() {
        return "Mahasiswa mengakses fitur pembelajaran online.";
    }
}

// Demonstrasi penggunaan class Mahasiswa
$mahasiswa1 = new Mahasiswa("Arfilal Faiznadi", "230302053", "Teknik Informatika");
echo $mahasiswa1->tampilkanData() . "<br>";
$mahasiswa1->setNama("Budi Yono Siregar");
$mahasiswa1->setNim("987654321");
$mahasiswa1->setJurusan("Kapal Laut");
echo "Nama: " . $mahasiswa1->getNama() . "<br>";
echo "Nim: " . $mahasiswa1->getNim() . "<br>";
echo "Jurusan: " . $mahasiswa1->getJurusan() . "<br><br>";
echo $mahasiswa1->aksesFitur() . "<br><br>";

// Class abstrak Pengguna: Dasar untuk semua jenis pengguna sistem
abstract class Pengguna {
    protected $nama;

    /**
     * Constructor: Menginisialisasi objek Pengguna dengan nama
     * @param string $nama Nama pengguna
     */
    public function __construct($nama) {
        $this->nama = $nama;
    }

    /**
     * Mengambil nama pengguna
     * @return string Nama pengguna
     */
    public function getNama() {
        return $this->nama;
    }

    /**
     * Method abstrak yang harus diimplementasikan oleh class turunan
     * @return string Deskripsi akses fitur
     */
    abstract public function aksesFitur();
}

// Class Dosen: Turunan dari Pengguna, representasi data dan perilaku dosen
class Dosen extends Pengguna {
    private $mataKuliah;

    /**
     * Constructor: Menginisialisasi objek Dosen dengan nama dan mata kuliah
     * @param string $nama Nama dosen
     * @param string $mataKuliah Mata kuliah yang diajar
     */
    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    /**
     * Mengambil mata kuliah yang diajar dosen
     * @return string Mata kuliah
     */
    public function getMataKuliah() {
        return $this->mataKuliah;
    }

    /**
     * Menampilkan data dosen dalam format yang mudah dibaca
     * @return string Data dosen terformat
     */
    public function tampilkanData() {
        return "Nama Dosen: {$this->nama}, Mata Kuliah: {$this->mataKuliah}";
    }

    /**
     * Implementasi polymorphism: Menjelaskan akses fitur untuk dosen
     * @return string Deskripsi akses fitur dosen
     */
    public function aksesFitur() {
        return "Dosen mengakses fitur penilaian mahasiswa.";
    }
}

// Demonstrasi penggunaan class Dosen
$dosen = new Dosen("Pak Abda'u", "PWEB2");
echo "Nama: " . $dosen->getNama() . "<br>";
echo "Mata Kuliah: " . $dosen->getMataKuliah() . "<br><br>";
echo $dosen->aksesFitur() . "<br>";