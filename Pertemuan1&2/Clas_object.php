<?php
//Definisi Class
class Buku {
    //Atribut atau Properties 
    public $judul;
    public $penulis;

    //Contructor
    public function __construct($judul, $penulis){
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    //Metode atau fuction
    public function tampilkanInfo() {
        return "Judul: $this->judul, Penulis: $this->penulis";
    }
}

//Instansiasi Objek
$buku1 = new Buku("Pemrograman PHP", "Andi Ptasetyo");
echo $buku1->tampilkanInfo();
?>

