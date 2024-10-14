<?php

class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkandata() {
        return "$this->nama, $this->nim, $this->jurusan";
    }

    public function updatejurusan($jurusan_baru) {
        $this->jurusan = $jurusan_baru;
    }

    public function setnim($nim) {
        $this->nim = $nim;
    }
}

echo "data mahasiswa awal". "<br>";
$mahasiswa1 = new Mahasiswa("Arfilal Faiznadi", "230302053", "Teknik Informatika");
echo $mahasiswa1->tampilkandata() . "<br>". "<br>";
echo "data mahasiswa update". "<br>";
$mahasiswa1->updatejurusan("Teknik Elektro");
$mahasiswa1->setnim("238129567");
echo $mahasiswa1->tampilkandata(). "<br>". "<br>";

class Dosen {
    public $nama;
    public $nip;
    public $mataKuliah;

    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    public function tampilkanDosen() {
        return "$this->nama, $this->nip, $this->mataKuliah";
    }

    
}
echo "data dosen". "<br>";
$Dosen1 = new Dosen("Abda'u", "123456789", "PWEB2");
echo $Dosen1->tampilkanDosen() . "<br>";



