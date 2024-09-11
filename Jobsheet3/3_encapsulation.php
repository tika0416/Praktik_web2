<?php
// Kelas Person
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

    // Method untuk mengubah nama
    public function setName($name) {
        $this->name = $name;
    }
}

// Kelas Student yang mewarisi Person
class Student extends Person {
    private $studentID; // Atribut studentID (private)

    // Constructor untuk inisialisasi nama dan studentID
    public function __construct($name, $studentID) {
        parent::__construct($name); // Memanggil constructor dari Person
        $this->studentID = $studentID;
    }

    // Method untuk mengubah studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }

    // Method untuk mendapatkan studentID
    public function getStudentID() {
        return $this->studentID;
    }

    // Method untuk mendapatkan nama (override dari Person)
    public function getName() {
        return parent::getName(); // Memanggil method getName dari Person
    }
}

// Membuat objek Student
$student = new Student("Billy ", 342567890);

echo "Data Sebelum diubah: <br>";
echo $student->getName() . "<br>"; // Menampilkan nama awal
echo $student->getStudentID() . "<br><br>"; // Menampilkan studentID awal

// Mengubah nama dan studentID
$student->setName("Siska Anjasmara");
$student->setStudentID("5436781200");

echo "Data Setelah diubah: <br>";
echo $student->getName() . "<br>"; // Menampilkan nama setelah diubah
echo $student->getStudentID(); // Menampilkan studentID setelah diubah
?>
