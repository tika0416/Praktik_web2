<?php
// Definisi Class
class Mahasiswa {
    // Atribut atau Properties 
    public $nama;
    public $nim;
    public $jurusan;

    // Metode atau function untuk menampilkan data
    public function tampilkanData() {
        return "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan: $this->jurusan <br>";
    }
}

// Instansiasi Objek
$mhs = new Mahasiswa();
$mhs->nama = "Tika Kuswardani";
$mhs->nim = "230102046";
$mhs->jurusan = "Komputer dan Bisnis";

echo $mhs->tampilkanData();
?>
