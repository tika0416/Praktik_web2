<?php
//Definisi Class
class Mahasiswa {
    //Atribut atau Properties 
    public $nama;
    public $nim;
    public $jurusan;

    //Contructor
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //Metode atau fuction
    public function tampilkanData() {
        return "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan: $this->jurusan <br>";
    }
}

//Instansiasi Objek
$mhs = new Mahasiswa("Tika Kuswardani", "230102046", "Komputer dan Bisnis");
echo $mhs->tampilkanData();
?>

