<?php 
//Definisi Class
class Pengguna{
    //Atribut atau Properties 
    protected $nama;
    //Contructor
    public function __construct($nama) {
        $this->nama = $nama;
    }
    //metode atau function getter
    public function getNama() {
        return $this->nama;
    }
}
// Class Dosen yang mengimplementasikan metode getNama
class Dosen extends Pengguna {
    //menambahkan atribut mataKuliah
    private $mataKuliah;

    //Contructor
    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }
    //Metode atau fuction
    public function getMatakuliah() {
        return $this->mataKuliah;
    }
}
//Instansiasi objek dari class Dosen dan tampilkan data dosen.
$dosen = new Dosen("Nama: Andi Setiawan", "Mata Kuliah: Bahasa inggris");
echo $dosen->getNama(); //Output Pemrograman 
echo "<br>";
echo $dosen->getMatakuliah(); //Output Pemrograman 
?>