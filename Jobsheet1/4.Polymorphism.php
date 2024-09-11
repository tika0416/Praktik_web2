<?php
// Class Pengguna dengan metode aksesFitur
class Pengguna {
    // menambahkan atribut
    protected $nama;

    // metode setter untuk nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Metode aksesFitur yang akan diimplementasikan ulang di class anak
    public function aksesFitur() {
        return "Akses fitur dasar pengguna.";
    }
}

// Class Dosen yang mengoverride metode aksesFitur
class Dosen extends Pengguna {
    private $mataKuliah;

    // metode setter untuk mata kuliah
    public function setMatakuliah($mataKuliah) {
        $this->mataKuliah = $mataKuliah;
    }

    // Override metode aksesFitur untuk Dosen
    public function aksesFitur() {
        return "Dosen dapat mengakses fitur pengelolaan nilai dan jadwal mata kuliah <br>  $this->mataKuliah ";
    }
}

// Class Mahasiswa yang mengoverride metode aksesFitur
class Mahasiswa extends Pengguna {
    private $jurusan;

    // metode setter untuk jurusan
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    // metode getter untuk jurusan
    public function getJurusan() {
        return $this->jurusan;
    }

    // Override metode aksesFitur untuk Mahasiswa
    public function aksesFitur() {
        return "Mahasiswa dapat mengakses fitur nilai KHS dan KRS <br> " . $this->getJurusan() . ".";
    }
}

// Instansiasi objek dari class Dosen dan Mahasiswa
$dosen = new Dosen();
$dosen->setNama("Nama: Andi Setiawan");
$dosen->setMatakuliah("Mata Kuliah: Bahasa Inggris");

$mahasiswa = new Mahasiswa();
$mahasiswa->setNama("Nama: Tika Kuswardani");
$mahasiswa->setJurusan("Jurusan: Komputer dan Bisnis");

// Panggil metode aksesFitur dari masing-masing objek
echo $dosen->aksesFitur();      // Output: Dosen dapat mengakses fitur pengelolaan nilai dan jadwal mata kuliah Mata Kuliah: Bahasa Inggris.
echo "<br>";
echo $mahasiswa->aksesFitur();  // Output: Mahasiswa dapat mengakses fitur pengisian KRS dan melihat nilai di jurusan Jurusan: Komputer dan Bisnis.
?>
