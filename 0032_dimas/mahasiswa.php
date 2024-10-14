<?php
class Mahasiswa {
    public $nim;
    public $nama;
    public $jurusan;
    public $angkatan;

    public function __construct($nim, $nama, $jurusan, $angkatan) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jurusan = $jurusan;
        $this->angkatan = $angkatan;
    }

    public function cetakInfo() {
        echo "NIM: " . $this->nim . "<br>";
        echo "Nama: " . $this->nama . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
        echo "Angkatan: " . $this->angkatan . "<br>";
    }
}

$mahasiswa1 = new Mahasiswa("232300032", "Dimas Priambodo Anugrah", "Sistem Informasi", 2023);
$mahasiswa1->cetakInfo();
?>
