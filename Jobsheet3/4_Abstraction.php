<?php
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

// Kelas OnlineCourse yang mewarisi Course
class OnlineCourse extends Course {
    private $platform; // Platform untuk kursus online

    // Setter untuk platform
    public function setPlatform($platform) {
        $this->platform = $platform;
    }

    // Implementasi method getCourseDetails
    public function getCourseDetails() {
        return "Course : {$this->courseName}<br> Platform : {$this->platform}<br>";
    }
}

// Kelas OfflineCourse yang mewarisi Course
class OfflineCourse extends Course {
    private $lokasi; // Lokasi untuk kursus offline

    // Setter untuk lokasi
    public function setLokasi($lokasi) {
        $this->lokasi = $lokasi;
    }

    // Implementasi method getCourseDetails
    public function getCourseDetails() {
        return "Course : {$this->courseName}<br> Location : {$this->lokasi}";
    }
}

// Membuat objek dari OnlineCourse dan OfflineCourse
$onlineCourse = new OnlineCourse();
$onlineCourse->setCourseName("English");
$onlineCourse->setPlatform("Zoom");

$offlineCourse = new OfflineCourse();
$offlineCourse->setCourseName("Programmer");
$offlineCourse->setLokasi("Classroom");

// Menampilkan detail kursus
echo "ONLINE COURSE: <br>";
echo $onlineCourse->getCourseDetails();
echo "<br>";
echo "OFFLINE COURSE: <br>";
echo $offlineCourse->getCourseDetails();
?>
