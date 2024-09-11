# JOBSHEET3
### 1. INHERITANCE
- Membuat kelas Person dan atribut name
```php
class Person {
    protected $name; // Atribut nama (protected)
```
- Membuat fungsi Contruct name untuk inisialisasi nama
```php
// Constructor untuk inisialisasi nama
    public function __construct($name) {
        $this->name = $name;
    }
```
- membuat metode getName
```php
// Method untuk mendapatkan nama
    public function getName() {
        return $this->name;
    }
```
- Buat kelas Student yang mewarisi dari Person dan tambahkan atribut studentID
serta metode getStudentID().
```php
class Student extends Person {
    public $studentID; // Atribut studentID

    // Method untuk mendapatkan ID siswa (tetapi saat ini mengembalikan string tetap)
    public function getStudentID() {
        return " Hai"; // Mengembalikan string tetap
    }
}
```
- Menampilkan nama siswa dan hasil dari studentID
```php
// Membuat objek Student dengan nama "Billy"
$siswa = new Student("Billy ");

// Menampilkan nama siswa dan hasil dari getStudentID
echo $siswa->getName() . " menyapa" . $siswa->getStudentID(); // Menampilkan nama siswa diikuti dengan string dari getStudentID
?>
```
### 2. POLYMORPSHISM
- Membuat kelas person seperti di atas
```php
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
```
- Membuat kelas teacher yang juga mewarisi dari kelas person dan menambahkan atribut teacherID
```php
// Kelas Teacher yang mewarisi Person
class Teacher extends Person {
    public $teacherID; // Atribut teacherID (public)
```
- membuat fungsi construct dan atribut yang mewarisi dari kelas person dan memasukan atribut dari kelas person
```php
// Constructor untuk inisialisasi nama dan teacherID
    public function __construct($name, $teacherID) {
        parent::__construct($name); // Memanggil constructor dari Person
        $this->teacherID = $teacherID;
    }
```
- Menambahkan metode getName1
```php
// Override method untuk menampilkan nama dengan label "Teacher"
    public function getName1() {
        return "Teacher: " . $this->name;
    }
```
- Membuat kelas student dan atribut student id
```php
// Kelas Student yang mewarisi Person
class Student extends Person {
    public $studentID; // Atribut studentID (public)
```
- Membuat construct
```php
// Constructor untuk inisialisasi nama dan studentID
    public function __construct($name, $studentID) {
        parent::__construct($name); // Memanggil constructor dari Person
        $this->studentID = $studentID;
    }
```
- Override metode getName() di kelas Student dan Teacher untuk menampilkan
format berbeda.
```php
// Override method untuk menampilkan nama dengan label "Student"
    public function getName() {
        return "Student: " . $this->name;
    }
}
```
- membuat objek student dan teacher
```php
// Membuat objek Student dan Teacher
$siswa = new Student("Siska Lestari", 1);
$teacher = new Teacher("Agus Purnomo", 2);
```
- Menampilkan nama student dan teacher dengan masing masing metode yang telah di override
```php
// Menampilkan nama Student dan Teacher dengan metode masing-masing
echo $siswa->getName() . "<br>";
echo $teacher->getName();
?>
```
### 3. ENCAPSULATION
- Memasukan kelas person yang kita buat tadi dan menambahkan metode setter getter
```php
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
```
- Ubah atribut name dan studentID dalam kelas Student menjadi private.
```php
// Kelas Student yang mewarisi Person
class Student extends Person {
    private $studentID; // Atribut studentID (private)
```
- Membuat fungsi construct
```php
// Constructor untuk inisialisasi nama dan studentID
    public function __construct($name, $studentID) {
        parent::__construct($name); // Memanggil constructor dari Person
        $this->studentID = $studentID;
    }
```
- Tambahkan metode setter dan getter untuk mengakses 
```php
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
```
- Membuat objek student
```php
// Membuat objek Student
$student = new Student("Billy ", 342567890);

echo "Data Sebelum diubah: <br>";
echo $student->getName() . "<br>"; // Menampilkan nama awal
echo $student->getStudentID() . "<br><br>"; // Menampilkan studentID awal
```
- mengubah nilai atribut name dan studentID.
```php
// Mengubah nama dan studentID
$student->setName("Siska Anjasmara");
$student->setStudentID("5436781200");

echo "Data Setelah diubah: <br>";
echo $student->getName() . "<br>"; // Menampilkan nama setelah diubah
echo $student->getStudentID(); // Menampilkan studentID setelah diubah
?>
```
### 4. ABSTRACTION
- Buat kelas abstrak Course dan membuat atribut course name, menambahkan construct
```php
// Kelas abstrak Course
abstract class Course {
    protected $courseName;

    // Constructor untuk inisialisasi nama course
    public function __construct($courseName) {
        $this->courseName = $courseName;
    }
```
- Method abstract yang harus diimplementasikan oleh subclass
```php
// Method abstract yang harus diimplementasikan oleh subclass
    abstract public function getCourseDetails();
}
```
- Buat kelas OnlineCourse dengan atribut platfrom
```php
// Kelas OnlineCourse yang mewarisi Course
class OnlineCourse extends Course {
    private $platform; // Platform untuk kursus online
```
- Membubat construct
```php
// Constructor untuk inisialisasi courseName dan platform
    public function __construct($courseName, $platform) {
        parent::__construct($courseName);
        $this->platform = $platform;
    }
```
- Implementasi method getCourseDetails
```php
// Implementasi method getCourseDetails
    public function getCourseDetails() {
        return "Course : {$this->courseName}<br> Platform : {$this->platform}<br>";
    }
```
- Buat kelas OfflineCourse dengan atribut lokasi
```php
// Kelas OfflineCourse yang mewarisi Course
class OfflineCourse extends Course {
    private $lokasi; // Lokasi untuk kursus offline
```
- Membuat construct
```php
// Constructor untuk inisialisasi courseName dan location
    public function __construct($courseName, $lokasi) {
        parent::__construct($courseName);
        $this->lokasi = $lokasi;
    }
```
- Implementasi method getCourseDetails
```php
// Implementasi method getCourseDetails
    public function getCourseDetails() {
        return "Course : {$this->courseName}<br> Location : {$this->location}";
    }
```
- Membuat Objek
```php
// Membuat objek dari OnlineCourse dan OfflineCourse
$onlineCourse = new OnlineCourse("English", "Zoom");
$offlineCourse = new OfflineCourse("Programmer", "Classroom");
```
- Menampilkan data
```php
// Menampilkan detail kursus
echo "ONLINE COURSE: <br>";
echo $onlineCourse->getCourseDetails();
echo "<br>";
echo "OFFLINE COURSE: <br>";
echo $offlineCourse->getCourseDetails();
?>
```
