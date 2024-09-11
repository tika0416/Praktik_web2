<?php
// Kelas Person sebagai induk
class Person {
    protected $name; // Atribut nama (protected)

    // Method untuk mendapatkan nama
    public function getName() {
        return $this->name;
    }

    // Setter untuk nama
    public function setName($name) {
        $this->name = $name;
    }
}

// Kelas Teacher yang mewarisi Person
class Teacher extends Person {
    public $teacherID; // Atribut teacherID (public)

    // Setter untuk teacherID
    public function setTeacherID($teacherID) {
        $this->teacherID = $teacherID;
    }

    // Override method untuk menampilkan nama dengan label "Teacher"
    public function getName() {
        return "Teacher: " . $this->name;
    }
}

// Kelas Student yang mewarisi Person
class Student extends Person {
    public $studentID; // Atribut studentID (public)

    // Setter untuk studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }

    // Override method untuk menampilkan nama dengan label "Student"
    public function getName() {
        return "Student: " . $this->name;
    }
}

// Membuat objek Student dan Teacher
$siswa = new Student();
$siswa->setName("Siska Lestari");
$siswa->setStudentID(1);

$teacher = new Teacher();
$teacher->setName("Agus Purnomo");
$teacher->setTeacherID(2);

// Menampilkan nama Student dan Teacher dengan metode masing-masing
echo $siswa->getName() . "<br>";
echo $teacher->getName();
?>
