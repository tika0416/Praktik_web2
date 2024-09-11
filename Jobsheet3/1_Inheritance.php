<?php
// Kelas induk Person
class Person {
    protected $name; // Atribut nama (protected)

    // Constructor untuk inisialisasi nama
    public function __construct($name) {
        $this->name = $name;
    }

    // Method untuk mendapatkan nama
    public function getName() {
        return $this->name;
    }
}

// Kelas Student yang mewarisi Person
class Student extends Person {
    public $studentID; // Atribut studentID

    // Method untuk mendapatkan ID siswa (tetapi saat ini mengembalikan string tetap)
    public function getStudentID() {
        return " Hai"; // Mengembalikan string tetap
    }
}

// Membuat objek Student dengan nama "Billy"
$siswa = new Student("Billy ");

// Menampilkan nama siswa dan hasil dari getStudentID
echo $siswa->getName() . " menyapa" . $siswa->getStudentID(); // Menampilkan nama siswa diikuti dengan string dari getStudentID
?>
