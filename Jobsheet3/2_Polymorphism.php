<?php
// Kelas Person sebagai induk
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

// Kelas Teacher yang mewarisi Person
class Teacher extends Person {
    public $teacherID; // Atribut teacherID (public)

    // Constructor untuk inisialisasi nama dan teacherID
    public function __construct($name, $teacherID) {
        parent::__construct($name); // Memanggil constructor dari Person
        $this->teacherID = $teacherID;
    }

    // Override method untuk menampilkan nama dengan label "Teacher"
    public function getName1() {
        return "Teacher: " . $this->name;
    }
}

// Kelas Student yang mewarisi Person
class Student extends Person {
    public $studentID; // Atribut studentID (public)

    // Constructor untuk inisialisasi nama dan studentID
    public function __construct($name, $studentID) {
        parent::__construct($name); // Memanggil constructor dari Person
        $this->studentID = $studentID;
    }

    // Override method untuk menampilkan nama dengan label "Student"
    public function getName() {
        return "Student: " . $this->name;
    }
}

// Membuat objek Student dan Teacher
$siswa = new Student("Siska Lestari", 1);
$teacher = new Teacher("Agus Purnomo", 2);

// Menampilkan nama Student dan Teacher dengan metode masing-masing
echo $siswa->getName() . "<br>";
echo $teacher->getName1();
?>
