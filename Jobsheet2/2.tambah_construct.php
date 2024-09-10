<?php
class Mahasiswa{
    private $nama;
    private $nim;
    private $jurusan;

    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData(){
       return "<br> Nama: $this->nama <br> NIM: $this->nim <br> Jurusan: $this->jurusan";
    }
}
//Instansiasi Objek
$Mhs = new Mahasiswa("Lisa Marlia Puspita", "230102057", "Elektronika dan Mekaronika");
// Menampilkan data awal
echo $Mhs->tampilkanData();
?>