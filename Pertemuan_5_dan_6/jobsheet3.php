<?php

// 1. Kelas Person sebagai induk
abstract class Person {
    protected $nama;
    protected $alamat;

    public function __construct($nama, $alamat) {
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getAlamat() {
        return $this->alamat;
    }

    // 3. Polymorphism: Metode abstrak yang akan di-override
    abstract public function getRole();
}

// 2. Inheritance: Kelas Dosen mewarisi Person
class Dosen extends Person {
    private $nidn;  // 4. Encapsulation

    public function __construct($nama, $alamat, $nidn) {
        parent::__construct($nama, $alamat);
        $this->nidn = $nidn;
    }

    public function getNidn() {
        return $this->nidn;
    }

    // 3. Polymorphism: Override getRole()
    public function getRole() {
        return "Dosen";
    }
}

// 2. Inheritance: Kelas Mahasiswa mewarisi Person
class Mahasiswa extends Person {
    private $nim;  // 4. Encapsulation

    public function __construct($nama, $alamat, $nim) {
        parent::__construct($nama, $alamat);
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }

    // 3. Polymorphism: Override getRole()
    public function getRole() {
        return "Mahasiswa";
    }
}

// 5. Abstraction: Kelas abstrak Jurnal
abstract class Jurnal {
    protected $judul;
    protected $penulis;

    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    abstract public function ajukanJurnal();
}

class JurnalDosen extends Jurnal {
    private $kategori;

    public function __construct($judul, Dosen $penulis, $kategori) {
        parent::__construct($judul, $penulis);
        $this->kategori = $kategori;
    }

    public function ajukanJurnal() {
        return "Jurnal Dosen '{$this->judul}' oleh {$this->penulis->getNama()} (NIDN: {$this->penulis->getNidn()}) diajukan dalam kategori {$this->kategori}.";
    }
}

class JurnalMahasiswa extends Jurnal {
    private $pembimbing;

    public function __construct($judul, Mahasiswa $penulis, Dosen $pembimbing) {
        parent::__construct($judul, $penulis);
        $this->pembimbing = $pembimbing;
    }

    public function ajukanJurnal() {
        return "Jurnal Mahasiswa '{$this->judul}' oleh {$this->penulis->getNama()} (NIM: {$this->penulis->getNim()}) diajukan dengan pembimbing {$this->pembimbing->getNama()}.";
    }
}

// Contoh penggunaan
$dosen1 = new Dosen("Dr. Budi", "Jl. Pendidikan No. 1", "1234567890");
$mahasiswa1 = new Mahasiswa("Ani", "Jl. Pelajar No. 2", "2021001001");

$jurnalDosen = new JurnalDosen("Penerapan AI dalam Pendidikan", $dosen1, "Teknologi Pendidikan");
$jurnalMahasiswa = new JurnalMahasiswa("Analisis Dampak Pembelajaran Online", $mahasiswa1, $dosen1);

echo $dosen1->getNama() . " - " . $dosen1->getRole() . "<br>";
echo $mahasiswa1->getNama() .  " - " . $mahasiswa1->getRole() . "<br>";
echo $jurnalDosen->ajukanJurnal() . "<br>";
echo $jurnalMahasiswa->ajukanJurnal() . "<br>";

?>