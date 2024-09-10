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
    // Setter untuk atribut nim
    public function setNim($nimBaru) {
        $this->nim = $nimBaru;
    }
}
//Instansiasi Objek
$Mhs = new Mahasiswa("Lisa Marlia Puspita", "230102057", "Elektronika dan Mekaronika");
// Menampilkan data awal
echo "DATA AWAL:";
echo $Mhs->tampilkanData();
echo "<br><br>";

// Mengubah nilai atribut nim menggunakan setter
$Mhs->setNim("2323232323");

// Menampilkan data setelah perubahan jurusan
echo "DATA SETELAH DI UBAH:";
echo $Mhs->tampilkanData();
?>