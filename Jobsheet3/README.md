# JOBSHEET3
### 1. INHERITANCE
- Membuat kelas Person dan atribut name
```php
class Person {
    protected $name; // Atribut nama (protected)
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
// Membuat objek Student
$siswa = new Student();

// Mengatur nama siswa menggunakan setter
$siswa->setName("Billy");

// Menampilkan nama siswa dan hasil dari getStudentID
echo $siswa->getName() . " menyapa" . $siswa->getStudentID(); // Menampilkan nama siswa diikuti dengan string dari getStudentID
?>

```

- OUTPUT<br>
<img width="370" alt="1 INHERENTANCE" src="https://github.com/user-attachments/assets/f525eaff-864d-49c7-8a6b-3d7035451abe">

  
### 2. POLYMORPSHISM
- Membuat kelas person seperti di atas
```php
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
```
- Membuat kelas teacher yang juga mewarisi dari kelas person dan menambahkan atribut teacherID
```php
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

    // Setter untuk studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }

    // Override method untuk menampilkan nama dengan label "Student"
    public function getName() {
        return "Student: " . $this->name;
    }
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
$siswa = new Student();
$siswa->setName("Siska Lestari");
$siswa->setStudentID(1);

$teacher = new Teacher();
$teacher->setName("Agus Purnomo");
$teacher->setTeacherID(2);
```
- Menampilkan nama student dan teacher dengan masing masing metode yang telah di override
```php
// Menampilkan nama Student dan Teacher dengan metode masing-masing
echo $siswa->getName() . "<br>";
echo $teacher->getName();
?>
```
- OUTPUT<br>
  <img width="391" alt="2 POLYMORPHSIM" src="https://github.com/user-attachments/assets/bcb3b646-73d9-4dad-b012-bce2c9f8db8c">

### 3. ENCAPSULATION
- Memasukan kelas person yang kita buat tadi dan menambahkan metode setter getter
```php
// Kelas Person
class Person {
    protected $name; // Atribut nama (protected)

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
$student = new Student();
```
- Mengatur nama dan studenid
```php
// Mengatur nama dan studentID menggunakan setter
$student->setName("Billy");
$student->setStudentID(342567890);

echo "Data Sebelum diubah: <br>";
echo $student->getName() . "<br>"; // Menampilkan nama awal
echo $student->getStudentID() . "<br><br>"; // Menampilkan studentID awal
```
- mengubah nilai atribut name dan studentID dan menampilkan isi data
```php
// Mengubah nama dan studentID
$student->setName("Siska Anjasmara");
$student->setStudentID("5436781200");

echo "Data Setelah diubah: <br>";
echo $student->getName() . "<br>"; // Menampilkan nama setelah diubah
echo $student->getStudentID(); // Menampilkan studentID setelah diubah
?>
```
- OUTPUT<br>
  <img width="443" alt="3  ENCAPSULATION" src="https://github.com/user-attachments/assets/8222979f-cd91-49fb-97f0-a0b469395144">

### 4. ABSTRACTION
- Buat kelas abstrak Course dan membuat atribut course name
```php
// Kelas abstrak Course
abstract class Course {
    protected $courseName;

    // Method abstract yang harus diimplementasikan oleh subclass
    abstract public function getCourseDetails();

    // Setter untuk courseName
    public function setCourseName($courseName) {
        $this->courseName = $courseName;
    }
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

    // Setter untuk platform
    public function setPlatform($platform) {
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

    // Setter untuk lokasi
    public function setLokasi($lokasi) {
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
/// Membuat objek dari OnlineCourse dan OfflineCourse
$onlineCourse = new OnlineCourse();
$onlineCourse->setCourseName("English");
$onlineCourse->setPlatform("Zoom");

$offlineCourse = new OfflineCourse();
$offlineCourse->setCourseName("Programmer");
$offlineCourse->setLokasi("Classroom");
```
- Menampilkan data
```php
// Menampilkan detail kursus
echo "ONLINE COURSE: <br>";
echo $onlineCourse->getCourseDetails();
echo "<br>";
echo "OFFLINE COURSE: <br>";
echo $offlineCourse->getCourseDetails();
```
- OUTPUT<br>
  <img width="458" alt="4 ABSTRACK" src="https://github.com/user-attachments/assets/5c5ba5a0-c49d-403b-8d91-25a211486e53">

# TUGAS
- menambahkan class person
```php
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
```
- Menambahkan kelas mahasiswa yang mewarisi person
```php
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
```
- Menambahkan kelas dosen yang mewarisi persona dan menambahkah Polymorphism dengan membuat metode getRole() 
```php
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
```
- Menambahkan encapsulation untuk nim dan nidn
```php
// Method untuk mendapatkan NIM (Encapsulation)
    public function getNim() {
        return $this->nim;
    }
```
- NIDN
```php
// Method untuk mendapatkan NIDN (Encapsulation)
    public function getNidn() {
        return $this->nidn;
    }
```
- Buat kelas abstrak Jurnal dan implementasikan konsep Abstraction dengan
membuat kelas turunan JurnalDosen dan JurnalMahasiswa yang masing-masing
memiliki cara tersendiri untuk mengelola pengajuan jurnal.
```php
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
        return "Judul Jurnal Mahasiswa: {$this->title} (telah diajukan)";
    }
}

// Kelas JurnalDosen sebagai turunan dari Jurnal
class JurnalDosen extends Jurnal {
    public function submitJurnal() {
        return "Judul Jurnal Dosen : {$this->title} (telah diajukan)";
    }
}
```
- Implementasi dan output
```php
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
```
- OUTPUT<br>
  <img width="484" alt="TUGAS" src="https://github.com/user-attachments/assets/0aa2079a-5de8-4ced-8afe-bb36bd0fa952">

