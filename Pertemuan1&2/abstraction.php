<?php 
// Abstract class BukuAbstrak
abstract class BukuAbstrak {
    protected $judul;
    protected $penulis;

    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    // Abstract method harus diimplementasikan di class anak
    abstract public function getJudul();
    abstract public function setJudul($judul);
}

// Class Buku mengimplementasikan BukuAbstrak
class Buku extends BukuAbstrak {

    // Implementasi method abstract
    public function getJudul() {
        return $this->judul;
    }

    public function setJudul($judul) {
        $this->judul = $judul;
    }
}

$buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");
echo $buku1->getJudul(); // Output: Pemrograman PHP
?>
