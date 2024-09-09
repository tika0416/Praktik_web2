<?php
// Abstract class Pengguna
abstract class Pengguna {
    //menambhakan atribut
    protected $nama;
    //Contructor
    public function __construct($nama) {
        $this->nama = $nama;
    }
    //metode atau function getter
    public function getNama() {
        return $this->nama;
    }

    // Abstract method yang harus diimplementasikan di class anak
    abstract public function aksesFitur();
}

// Class Dosen yang mengimplementasikan metode aksesFitur
class Dosen extends Pengguna { 
    //menambahkan atribut 
    private $mataKuliah;
    //Contructor
    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }
    //metode atau function getter
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
    //menmabahkan atribut di clas mahasiswa
    private $jurusan;
    //menambahkan function construct
    public function __construct($nama, $jurusan) {
        parent::__construct($nama);
        $this->jurusan = $jurusan;
    }
    //metode atau function getter
    public function getJurusan() {
        return $this->jurusan;
    }

    // Implementasi metode aksesFitur untuk Mahasiswa
    public function aksesFitur() {
        return "Mahasiswa dapat mengakses fitur pengisian KRS dan melihat nilai di jurusan " . $this->getJurusan() . ".";
    }
}

// Instansiasi objek dari class Dosen dan Mahasiswa
$dosen = new Dosen("Andi Setiawan", "Bahasa Inggris");
$mahasiswa = new Mahasiswa("Tika Kuswardani", "Komputer dan Bisnis");

// Panggil metode aksesFitur dari masing-masing objek
echo $dosen->aksesFitur();      // Output: Dosen dapat mengakses fitur pengelolaan nilai dan jadwal mata kuliah Bahasa Inggris.
echo "<br>";
echo $mahasiswa->aksesFitur();  // Output: Mahasiswa dapat mengakses fitur pengisian KRS dan melihat nilai di jurusan Komputer dan Bisnis.
?>