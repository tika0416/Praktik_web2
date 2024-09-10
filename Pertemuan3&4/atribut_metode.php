<?php
class Buku{
    public $judul;
    public $penulis;

    public function __construct($judul, $penulis){
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    public function tampilkanInfo() {
        return "Buku: $this->judul, Ditulis oleh: $this->penulis.";
    }
}
//instiansi objek
$buku1 = new Buku("Pemograman PHP", "Angelia");
echo $buku1->tampilkanInfo();
?>