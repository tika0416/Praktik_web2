<?php
// Kelas abstrak Course
abstract class Course {
    protected $courseName;

    // Constructor untuk inisialisasi nama course
    public function __construct($courseName) {
        $this->courseName = $courseName;
    }

    // Method abstract yang harus diimplementasikan oleh subclass
    abstract public function getCourseDetails();
}
// Kelas OnlineCourse yang mewarisi Course
class OnlineCourse extends Course {
    private $platform; // Platform untuk kursus online

    // Constructor untuk inisialisasi courseName dan platform
    public function __construct($courseName, $platform) {
        parent::__construct($courseName);
        $this->platform = $platform;
    }

    // Implementasi method getCourseDetails
    public function getCourseDetails() {
        return "Course : {$this->courseName}<br> Platform : {$this->platform}<br>";
    }
}
// Kelas OfflineCourse yang mewarisi Course
class OfflineCourse extends Course {
    private $location; // Lokasi untuk kursus offline

    // Constructor untuk inisialisasi courseName dan location
    public function __construct($courseName, $location) {
        parent::__construct($courseName);
        $this->location = $location;
    }

    // Implementasi method getCourseDetails
    public function getCourseDetails() {
        return "Course : {$this->courseName}<br> Location : {$this->location}";
    }
}
// Membuat objek dari OnlineCourse dan OfflineCourse
$onlineCourse = new OnlineCourse("English", "Zoom");
$offlineCourse = new OfflineCourse("Programmer", "Classroom");

// Menampilkan detail kursus
echo "ONLINE COURSE: <br>";
echo $onlineCourse->getCourseDetails();
echo "<br>";
echo "OFFLINE COURSE: <br>";
echo $offlineCourse->getCourseDetails();
?>
