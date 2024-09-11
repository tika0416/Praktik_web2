# Jobsheet2
## Kelas dan Objek dalam PHP
### Kelas (Class)
- Struktur atau blueprint yang mendefinisikan atribut dan metode yang dimiliki oleh objek.
- Atribut atau properties adalah variabel yang menyimpan data untuk objek.
- Metode adalah fungsi yang ditentukan dalam kelas yang dapat dipanggil oleh objek.
### Objek (Object)
- Instansiasi dari kelas.
- Memiliki akses ke atribut dan metode yang didefinisikan dalam kelas.
### Atribut dan Metode
- Atribut: Menyimpan data atau keadaan dari objek.
- Metode: Operasi atau fungsi yang dilakukan oleh objek.

### 1. Membuat Class dan Object
- Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.
```php
class Mahasiswa{
    public $nama;
    public $nim;
    public $jurusan;
```
- Buat metode tampilkanData() dalam class Mahasiswa.
```php
 public function tampilkanData(){
        return "<br> Nama: $this->nama <br>
        NIM: $this->nim  <br> 
        Jurusan: $this->jurusan ";
     }
```
- Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
```php
$Mhs = new Mahasiswa();
    $Mhs->nama = "Lisa Marlia Puspita";
    $Mhs->nim = "230102057";
    $Mhs->jurusan = "Elektronika dan Mekaronika";

// Menampilkan data awal
echo $Mhs->tampilkanData();
```
### 2. Implementasi Constructor
- Tambahkan constructor pada kelas Mahasiswa yang akan menginisialisasi
atribut nama, nim, dan jurusan.
```php
public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
```
- Gunakan constructor ini untuk mengatur nilai awal dari atribut saat objek dibuat.
```php
public function tampilkanData(){
       return "<br> Nama: $this->nama <br> NIM: $this->nim <br> Jurusan: $this->jurusan";
    }
}
//Instansiasi Objek
$Mhs = new Mahasiswa("Lisa Marlia Puspita", "230102057", "Elektronika dan Mekaronika");
// Menampilkan data awal
echo $Mhs->tampilkanData();
```
### 3. Membuat Metode tambahan yaitu update jurusan
- Buat metode updateJurusan() dalam kelas Mahasiswa yang memungkinkan
perubahan jurusan.
```php
public function updateJurusan($jurusanBaru){
        $this->jurusan = $jurusanBaru;
    }
```
- Gunakan metode ini untuk mengubah jurusan dari objek yang sudah dibuat.
```php
//Instansiasi Objek
$Mhs = new Mahasiswa("Lisa Marlia Puspita", "230102057", "Elektronika dan Mekaronika");
// Menampilkan data awal
echo "DATA AWAL:";
echo $Mhs->tampilkanData();
echo "<br><br>";

// Mengubah jurusan
$Mhs->updateJurusan("Komputer dan Bisnis <br><br>");
echo "DATA SETELAH DI UBAH:";
echo $Mhs->tampilkanData();
```
### 4. Penggunaan Atribut dan Metode
- Mengubah nim dengan metode stter
- Ubah nilai atribut nim dari objek Mahasiswa menggunakan metode setter.
```php
// Setter untuk atribut nim
    public function setNim($nimBaru) {
        $this->nim = $nimBaru;
    }
```
(menggunakan metode setter dan mengganti nim awal)
- Tampilkan data mahasiswa yang sudah diperbarui dengan memanggil metode
tampilkanData().
```php
//Instansiasi Objek
$Mhs = new Mahasiswa("Lisa Marlia Puspita", "230102057", "Elektronika dan Mekaronika");
// Menampilkan data awal
echo "DATA AWAL:";
echo $Mhs->tampilkanData();
echo "<br><br>";

// Mengubah nilai atribut nim menggunakan setter
$Mhs->setNim("2323232323");

// Menampilkan data setelah perubahan jurusan
echo "DATA SETELAH DI UBAH:";
echo $Mhs->tampilkanData();
```

## Tugas
- Membuat Kelas Dosen dan menambahkan atribut nama,nim dan jurusan,
```php
class Dosen {
    //membuat object
    public $nama;
    public $nip;
    public $mataKuliah;
```
- Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.
```php
public function __construct($nama, $nip, $mataKuliah){
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
```
- Buat metode tampilkanDosen() untuk menampilkan informasi dosen.
```php
public function tampilkanDosen(){
        return "Nama: $this->nama <br> NIP: $this->nip <br> Mata Kuliah: $this->mataKuliah ";
    }
```
- menampilkan objek dosen dan instansiasi dengan memasukan data yang akan di tampilkan
```php
//Instansiasi Objek
$dosen1 = new Dosen("Darwin Hendrik", "199805047658934", "Aplikasi dan Komputer");
echo "DATA DOSEN: <br>";
echo $dosen1->tampilkanDosen();
```


