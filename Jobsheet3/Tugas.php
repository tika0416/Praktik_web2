<?php
// Kelas Person sebagai induk untuk Dosen dan Mahasiswa
class Person {
    protected $name; // Atribut name (protected agar bisa diakses oleh subclass)

    // Constructor untuk menginisialisasi name
    public function __construct($name) {
        $this->name = $name;
    }

    // Method untuk mendapatkan name
    public function getName() {
        return $this->name;
    }

    // Polymorphism: Metode ini akan di-override oleh subclass untuk menampilkan peran (role)
    public function getRole() {
        return "Person";
    }
}

// Kelas Mahasiswa yang mewarisi Person
class Mahasiswa extends Person {
    private $nim; // Encapsulation: Atribut NIM hanya dapat diakses melalui method

    // Constructor untuk menginisialisasi name dan nim
    public function __construct($name, $nim) {
        // Memanggil constructor dari kelas induk (Person)
        parent::__construct($name);
        $this->nim = $nim;
    }

    // Method untuk mendapatkan NIM (Encapsulation)
    public function getNim() {
        return $this->nim;
    }

    // Polymorphism: Override metode getRole dari kelas Person
    public function getRole() {
        return "Mahasiswa";
    }
}

// Kelas Dosen yang mewarisi Person
class Dosen extends Person {
    private $nidn; // Encapsulation: Atribut NIDN hanya dapat diakses melalui method

    // Constructor untuk menginisialisasi name dan nidn
    public function __construct($name, $nidn) {
        // Memanggil constructor dari kelas induk (Person)
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    // Method untuk mendapatkan NIDN (Encapsulation)
    public function getNidn() {
        return $this->nidn;
    }

    // Polymorphism: Override metode getRole dari kelas Person
    public function getRole() {
        return "Dosen";
    }
}

// Kelas abstrak Jurnal sebagai representasi abstraksi dari pengajuan jurnal
abstract class Jurnal {
    protected $title; // Atribut title untuk menyimpan judul jurnal

    // Constructor untuk menginisialisasi title
    public function __construct($title) {
        $this->title = $title;
    }

    // Abstraction: Method abstrak yang harus diimplementasikan oleh subclass
    abstract public function submitJurnal();
}

// Kelas JurnalMahasiswa sebagai turunan dari Jurnal
class JurnalMahasiswa extends Jurnal {
    public function submitJurnal() {
        return "Jurnal Mahasiswa berjudul: {$this->title} (telah diajukan)";
    }
}

// Kelas JurnalDosen sebagai turunan dari Jurnal
class JurnalDosen extends Jurnal {
    public function submitJurnal() {
        return "Jurnal Dosen berjudul : {$this->title} (telah diajukan)";
    }
}

// Implementasi dan output
$siswa = new Mahasiswa("Billy", "123456789");
$dosen = new Dosen("Turwanto", "19876547650321");

// Menampilkan output
echo $siswa->getName() . " adalah " . $siswa->getRole() . " dengan NIM " . $siswa->getNim() . "<br>";
echo $dosen->getName() . " adalah " . $dosen->getRole() . " dengan NIDN " . $dosen->getNidn() . "<br>";

// Pengelolaan jurnal
$jurnalMahasiswa = new JurnalMahasiswa("Penelitian tentang bahasa anak");
$jurnalDosen = new JurnalDosen("Penelitian tetang cara pengendalian lingkungan ");
echo "<br> JURNAL: <br>";
echo $jurnalMahasiswa->submitJurnal() . "<br>";
echo $jurnalDosen->submitJurnal();
?>
