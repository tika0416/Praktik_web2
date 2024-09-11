<?php 
// Definisi Class
class Mahasiswa{
    // Atribut atau Properties 
    private $nama;
    private $nim;
    private $jurusan;

    // metode atau function getter
    public function getNama() {
        return $this->nama;
    }
    // metode atau function setter
    public function setNama($nama) {
        $this->nama = $nama;
    }
    // metode atau function getter
    public function getNim() {
        return $this->nim;
    }
    // metode atau function setter
    public function setNim($nim) {
        $this->nim = $nim;
    }
    // metode atau function getter
    public function getJurusan() {
        return $this->jurusan;
    }
    // metode atau function setter
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
}

// Instansiasi Objek
$Mhs = new Mahasiswa();
$Mhs->setNama("Nama: Tika Kuswardani");
$Mhs->setNim("Nim: 230102046");
$Mhs->setJurusan("Jurusan: Komputer dan Bisnis");

echo $Mhs->getNama(); // Output Pemrograman 
echo "<br>";
echo $Mhs->getNim(); // Output Pemrograman 
echo "<br>";
echo $Mhs->getJurusan(); // Output Pemrograman 
?>
