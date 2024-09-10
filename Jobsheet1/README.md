# JOBSHEET1
## KELAS DAN OBJEK
### KELAS
Class adalah cetak biru atau blueprint dari object. Class digunakan hanya untuk membuat kerangka dasar, Class adalah template yang mewakili entitas dunia nyata, dan mendefinisikan properti dan method entitas.
~~~php
class Mahasiswa
~~~
### OBJEK
Property (atau disebut juga dengan atribut) adalah data yang terdapat dalam sebuah class. Melanjutkan analogi tentang laptop, property dari laptop bisa berupa merk, warna, jenis processor, ukuran layar, dan lain-lain.

```php
public $nama;
private $nim;
protected $nim;
```

### 1. Class dan Object
Membuat class Mahasiswa dan atribut nama,nim,dan jurusan
```php
class Mahasiswa {
    //Atribut atau Properties 
    public $nama;
    public $nim;
    public $jurusan;
```
manambahkan construct
```php
//Contructor
public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
```
Membuat metode tampilkanData() dalam class Mahasiswa.
```php
//Metode atau fuction
    public function tampilkanData() {
        return "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan: $this->jurusan <br>";
    }
```
Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
```php
//Instansiasi Objek
$mhs = new Mahasiswa("Tika Kuswardani", "230102046", "Komputer dan Bisnis");
echo $mhs->tampilkanData();
```
Output

<img width="440" alt="1" src="https://github.com/user-attachments/assets/6a50f3d3-9ae4-439b-b9a1-3b92860c25b2">

### 2. Encapsulation
Ubah atribut dalam class Mahasiswa menjadi private.
```php
class Mahasiswa{
    //Atribut atau Properties 
    private $nama;
    private $nim;
    private $jurusan;
```
Buat metode getter dan setter untuk atribut nama, nim, dan jurusan.
```php
ublic function getNama() {
        return $this->nama;
    }
    //metode atau function setter
    public function setNama($nama) {
        $this->nama = $nama;
    }
    //metode atau function getter
    public function getNim() {
        return $this->nim;
    }
    //metode atau function setter
    public function setNim($nim) {
        $this->nim = $nim;
    }
    //metode atau function getter
    public function getJurusan() {
        return $this->jurusan;
    }
    //metode atau function setter
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
```
Demonstrasikan akses ke atribut menggunakan metode getter dan setter.
```php
//Instansiasi Objek
$Mhs = new Mahasiswa("Nama: Tika Kuswardani", "Nim: 230102046", "Jurusan: Komputer dan Bisnis");
echo $Mhs->getNama(); //Output Pemrograman 
echo "<br>";
echo $Mhs->getNim(); //Output Pemrograman 
echo "<br>";
echo $Mhs->getJurusan(); //Output Pemrograman 
```
### 3. Inheritance
Buat class Pengguna dengan atribut nama dan metode getNama().
```php
//Definisi Class
class Pengguna{
    //Atribut atau Properties 
    protected $nama;
    //Contructor
    public function __construct($nama) {
        $this->nama = $nama;
    }
    //metode atau function getter
    public function getNama() {
        return $this->nama;
    }
```
Buat class Dosen yang mewarisi class Pengguna dan tambahkan atribut
mataKuliah.
```php
class Dosen extends Pengguna {
    //menambahkan atribut mataKuliah
    private $mataKuliah;

    //Contructor
    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }
    //Metode atau fuction
    public function getMatakuliah() {
        return $this->mataKuliah;
    }
```
Instansiasi objek dari class Dosen dan tampilkan data dosen.
```php
//Instansiasi objek dari class Dosen dan tampilkan data dosen.
$dosen = new Dosen("Nama: Andi Setiawan", "Mata Kuliah: Bahasa inggris");
echo $dosen->getNama(); //Output Pemrograman 
echo "<br>";
echo $dosen->getMatakuliah(); //Output Pemrograman 
?>
```
### 4. Polymorphism
Buat class Pengguna dengan metode aksesFitur().
```php
// Class Pengguna dengan metode aksesFitur
class Pengguna {
    //menambahkan atribut
    protected $nama;
    //function contructor
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode aksesFitur yang akan diimplementasikan ulang di class anak
    public function aksesFitur() {
        return "Akses fitur dasar pengguna.";
    }
```
Implementasikan aksesFitur() dengan cara berbeda di class Dosen dan
Mahasiswa.

Dosen
```php
class Dosen extends Pengguna {
    private $mataKuliah;

    //function contructor
    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }



    // Override metode aksesFitur untuk Dosen
    public function aksesFitur() {
        return "Dosen dapat mengakses fitur pengelolaan nilai dan jadwal mata kuliah <br>  $this->mataKuliah ";
    }
}
```
Mahasiswa
```php
// Class Mahasiswa yang mengoverride metode aksesFitur
class Mahasiswa extends Pengguna {
    private $jurusan;

    //Menambahkan function Contructor
    public function __construct($nama, $jurusan) {
        parent::__construct($nama);
        $this->jurusan = $jurusan;
    }

    //metode atau function getter 
    public function getJurusan() {
        return $this->jurusan;
    }

    // Override metode aksesFitur untuk Mahasiswa
    public function aksesFitur() {
        return "Mahasiswa dapat mengakses fitur nilai KHS dan KRS <br> " . $this->getJurusan() . ".";
    }
}
```
Instansiasi objek dari class Dosen dan Mahasiswa, lalu panggil metode
aksesFitur().
```php
// Instansiasi objek dari class Dosen dan Mahasiswa
$dosen = new Dosen("Nama: Andi Setiawan", "Mata Kuliah: Bahasa Inggris");
$mahasiswa = new Mahasiswa("Nama: Tika Kuswardani", "Jurusan: Komputer dan Bisnis");

// Panggil metode aksesFitur dari masing-masing objek
echo $dosen->aksesFitur();      // Output: Dosen dapat mengakses fitur pengelolaan nilai dan jadwal mata kuliah Mata Kuliah: Bahasa Inggris.
echo "<br>";
echo $mahasiswa->aksesFitur();  // Output: Mahasiswa dapat mengakses fitur pengisian KRS dan melihat nilai di jurusan Jurusan: Komputer dan Bisnis.
?>
```
### 5. Abstraction
Buat class abstrak Pengguna dengan metode abstrak aksesFitur().
```php
// Abstract class Pengguna
abstract class Pengguna {
    //menambhakan atribut
    protected $nama;
    //Contructor
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Abstract method yang harus diimplementasikan di class anak
    abstract public function aksesFitur();
}
```
Implementasikan class Mahasiswa dan Dosen yang mengimplementasikan
metode abstrak tersebut.

Mahasiswa
```php
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
```
Dosen
```php
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
```
Demonstrasikan dengan memanggil metode aksesFitur() dari objek yang
diinstansiasi.
```php
$dosen = new Dosen("Andi Setiawan", "Bahasa Inggris");
$mahasiswa = new Mahasiswa("Tika Kuswardani", "Komputer dan Bisnis");

// Panggil metode aksesFitur dari masing-masing objek
echo $dosen->aksesFitur();      // Output: Dosen dapat mengakses fitur pengelolaan nilai dan jadwal mata kuliah Bahasa Inggris.
echo "<br>";
echo $mahasiswa->aksesFitur();  // Output: Mahasiswa dapat mengakses fitur pengisian KRS dan melihat nilai di jurusan Komputer dan Bisnis.
?>
```
