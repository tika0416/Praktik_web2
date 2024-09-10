<?php
class Mahasiswa{
    public $nama;
    public $nim;
    public $jurusan;

    public function tampilkanData(){
        return "<br> Nama: $this->nama <br>
        NIM: $this->nim  <br> 
        Jurusan: $this->jurusan ";
     }
}
$Mhs = new Mahasiswa();
    $Mhs->nama = "Lisa Marlia Puspita";
    $Mhs->nim = "230102057";
    $Mhs->jurusan = "Elektronika dan Mekaronika";

// Menampilkan data awal
echo $Mhs->tampilkanData();
?>