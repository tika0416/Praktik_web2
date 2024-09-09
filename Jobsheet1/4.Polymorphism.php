<?php
// Class Pengguna dengan metode aksesFitur
class Pengguna {
    //menambahkan atribut
    protected $nama;
    //function contructor
    public function __construct($nama) {
        $this->nama = $nama;
    }
    //metode atau function getter
    public function getNama() {
        return $this->nama;
    }

    // Metode aksesFitur yang akan diimplementasikan ulang di class anak
    public function aksesFitur() {
        return "Akses fitur dasar pengguna.";
    }
}

// Class Dosen yang mengoverride metode aksesFitur
class Dosen extends Pengguna {
    private $mataKuliah;

    //function contructor
    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    //Metode atau fuction
    public function getMatakuliah() {
        return $this->mataKuliah;
    }

    // Override metode aksesFitur untuk Dosen
    public function aksesFitur() {
        return "Dosen dapat mengakses fitur pengelolaan nilai dan jadwal mata kuliah <br> " . $this->getMatakuliah() . ".";
    }
}

// Class Mahasiswa yang mengoverride metode aksesFitur
class Mahasiswa extends Pengguna {
    private $jurusan;

    //Menambahkan function Contructor
    public function __construct($nama, $jurusan) {
        parent::__construct($nama);
        $this->jurusan = $jurusan;
    }

    //metode atau function getter 
    public function getJurusan() {
        return $this->jurusan;
    }

    // Override metode aksesFitur untuk Mahasiswa
    public function aksesFitur() {
        return "Mahasiswa dapat mengakses fitur nilai KHS dan KRS <br> " . $this->getJurusan() . ".";
    }
}

// Instansiasi objek dari class Dosen dan Mahasiswa
$dosen = new Dosen("Nama: Andi Setiawan", "Mata Kuliah: Bahasa Inggris");
$mahasiswa = new Mahasiswa("Nama: Tika Kuswardani", "Jurusan: Komputer dan Bisnis");

// Panggil metode aksesFitur dari masing-masing objek
echo $dosen->aksesFitur();      // Output: Dosen dapat mengakses fitur pengelolaan nilai dan jadwal mata kuliah Mata Kuliah: Bahasa Inggris.
echo "<br>";
echo $mahasiswa->aksesFitur();  // Output: Mahasiswa dapat mengakses fitur pengisian KRS dan melihat nilai di jurusan Jurusan: Komputer dan Bisnis.
?>
