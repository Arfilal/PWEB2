<?php

class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    /**
     * Konstruktor untuk kelas Mahasiswa
     * 
     * @param string $nama Nama mahasiswa
     * @param string $nim Nomor Induk Mahasiswa
     * @param string $jurusan Jurusan mahasiswa
     */
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    /**
     * Menampilkan data mahasiswa
     * 
     * @return string Data mahasiswa dalam format string
     */
    public function tampilkandata() {
        return "$this->nama, $this->nim, $this->jurusan";
    }

    /**
     * Memperbarui jurusan mahasiswa
     * 
     * @param string $jurusan_baru Jurusan baru mahasiswa
     */
    public function updatejurusan($jurusan_baru) {
        $this->jurusan = $jurusan_baru;
    }

    /**
     * Mengatur NIM baru untuk mahasiswa
     * 
     * @param string $nim NIM baru mahasiswa
     */
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

    /**
     * Konstruktor untuk kelas Dosen
     * 
     * @param string $nama Nama dosen
     * @param string $nip Nomor Induk Pegawai dosen
     * @param string $mataKuliah Mata kuliah yang diajar oleh dosen
     */
    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    /**
     * Menampilkan data dosen
     * 
     * @return string Data dosen dalam format string
     */
    public function tampilkanDosen() {
        return "$this->nama, $this->nip, $this->mataKuliah";
    }
}

echo "data dosen". "<br>";
$Dosen1 = new Dosen("Abda'u", "123456789", "PWEB2");
echo $Dosen1->tampilkanDosen() . "<br>";