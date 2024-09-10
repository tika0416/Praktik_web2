<?php 
// Kelas induk Buku
class Buku {
    protected $judul;
    protected $penulis;

    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setJudul($judul) {
        $this->judul = $judul;
    }

    // Metode yang akan di-polymorph oleh subclass
    public function getTipeBuku() {
        return "Tipe buku umum";
    }
}

// Subclass BukuDigital
class BukuDigital extends Buku {

    public function getTipeBuku() {
        return "Buku Digital: " . $this->judul;
    }
}

// Subclass BukuCetak
class BukuCetak extends Buku {

    public function getTipeBuku() {
        return "Buku Cetak: " . $this->judul;
    }
}

$bukuDigital = new BukuDigital("Pemrograman PHP", "Andi Prasetyo");
$bukuCetak = new BukuCetak("Pemrograman Java", "Budi Santoso");

echo $bukuDigital->getTipeBuku(); // Output: Buku Digital: Pemrograman PHP
echo "<br>";
echo $bukuCetak->getTipeBuku(); // Output: Buku Cetak: Pemrograman Java
?>
