<?php 
// Definisi Class
class Pengguna {
    // Atribut atau Properties 
    protected $nama;

    // metode atau function getter
    public function getNama() {
        return $this->nama;
    }

    // metode atau function setter
    public function setNama($nama) {
        $this->nama = $nama;
    }
}

// Class Dosen yang mengimplementasikan metode getNama
class Dosen extends Pengguna {
    // menambahkan atribut mataKuliah
    private $mataKuliah;

    // metode atau function getter
    public function getMatakuliah() {
        return $this->mataKuliah;
    }

    // metode atau function setter
    public function setMatakuliah($mataKuliah) {
        $this->mataKuliah = $mataKuliah;
    }
}

// Instansiasi objek dari class Dosen dan tampilkan data dosen.
$dosen = new Dosen();
$dosen->setNama("Nama: Andi Setiawan");
$dosen->setMatakuliah("Mata Kuliah: Bahasa Inggris");

echo $dosen->getNama(); // Output Pemrograman 
echo "<br>";
echo $dosen->getMatakuliah(); // Output Pemrograman 
?>
