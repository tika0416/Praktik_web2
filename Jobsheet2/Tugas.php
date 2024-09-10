<?php
//membuat class
class Dosen {
    //membuat object
    public $nama;
    public $nip;
    public $mataKuliah;

    public function __construct($nama, $nip, $mataKuliah){
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    public function tampilkanDosen(){
        return "Nama: $this->nama <br> NIP: $this->nip <br> Mata Kuliah: $this->mataKuliah ";
    }
}
//Instansiasi Objek
$dosen1 = new Dosen("Darwin Hendrik", "199805047658934", "Aplikasi dan Komputer");
echo "DATA DOSEN: <br>";
echo $dosen1->tampilkanDosen();
?>