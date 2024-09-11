<?php
// Abstract class Pengguna
abstract class Pengguna {
    // menambahkan atribut
    protected $nama;

    // metode setter untuk nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Abstract method yang harus diimplementasikan di class anak
    abstract public function aksesFitur();
}

// Class Dosen yang mengimplementasikan metode aksesFitur
class Dosen extends Pengguna { 
    // menambahkan atribut 
    private $mataKuliah;

    // metode setter untuk mata kuliah
    public function setMatakuliah($mataKuliah) {
        $this->mataKuliah = $mataKuliah;
    }

    // metode getter untuk mata kuliah
    public function getMatakuliah() {
        return $this->mataKuliah;
    }

    // Implementasi metode aksesFitur untuk Dosen
    public function aksesFitur() {
        return "Dosen dapat mengakses fitur pengelolaan nilai dan jadwal mata kuliah " . $this->getMatakuliah() . ".";
    }
}

// Class Mahasiswa yang mengimplementasikan metode aksesFitur
class Mahasiswa extends Pengguna {
    // menambahkan atribut di class mahasiswa
    private $jurusan;

    // metode setter untuk jurusan
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    // metode getter untuk jurusan
    public function getJurusan() {
        return $this->jurusan;
    }

    // Implementasi metode aksesFitur untuk Mahasiswa
    public function aksesFitur() {
        return "Mahasiswa dapat mengakses fitur pengisian KRS dan melihat nilai di jurusan " . $this->getJurusan() . ".";
    }
}

// Instansiasi objek dari class Dosen dan Mahasiswa
$dosen = new Dosen();
$dosen->setNama("Andi Setiawan");
$dosen->setMatakuliah("Bahasa Inggris");

$mahasiswa = new Mahasiswa();
$mahasiswa->setNama("Tika Kuswardani");
$mahasiswa->setJurusan("Komputer dan Bisnis");

// Panggil metode aksesFitur dari masing-masing objek
echo $dosen->aksesFitur();      // Output: Dosen dapat mengakses fitur pengelolaan nilai dan jadwal mata kuliah Bahasa Inggris.
echo "<br>";
echo $mahasiswa->aksesFitur();  // Output: Mahasiswa dapat mengakses fitur pengisian KRS dan melihat nilai di jurusan Komputer dan Bisnis.
?>
