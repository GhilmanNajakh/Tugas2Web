<?php 
//Incluade Class Mahasiswa1.php
require_once "Mahasiswa.php";

// Inisialisasi variabel (objek) mahasiswaSatu
$mahasiswaSatu = new Mahasiswa();

$mahasiswaSatu->nama                    ="M.Ghilman Najakh";
$mahasiswaSatu->nim                     ="23.240.0049";
$mahasiswaSatu->jenis_kelamin           = "Laki-Laki";
$mahasiswaSatu->alamat = $alamat        ="Karangdowo ";
$mahasiswaSatu->umur                    = 19;
$mahasiswaSatu->angkatan = $angkatan    = 2023;


// Menambahkan padding secara manual untuk meluruskan output
echo "Nama                 = $mahasiswaSatu->nama" . PHP_EOL;
echo "NIM                  = $mahasiswaSatu->nim" . PHP_EOL;
echo "Jenis Kelamin        = $mahasiswaSatu->jenis_kelamin" . PHP_EOL;
echo "Alamat               = $mahasiswaSatu->alamat" . PHP_EOL;
echo "Umur                 = $mahasiswaSatu->umur" .PHP_EOL;
echo "Angkatan             = $mahasiswaSatu->angkatan" . PHP_EOL;




echo "<br></br>";


$mahasiswaKedua = new Mahasiswa();

$mahasiswaKedua->nama                    ="Muhammad Ilham Sahada";
$mahasiswaKedua->nim                     ="23.240.0042";
$mahasiswaKedua->jenis_kelamin           = "Laki-Laki";
$mahasiswaKedua->alamat = $alamat        ="Pemalang ";
$mahasiswaKedua->umur                    = 20;
$mahasiswaKedua->angkatan = $angkatan    = 2023;


// Menambahkan padding secara manual untuk meluruskan output
echo "Nama                 = $mahasiswaKedua->nama" . PHP_EOL;
echo "NIM                  = $mahasiswaKedua->nim" . PHP_EOL;
echo "Jenis Kelamin        = $mahasiswaKedua->jenis_kelamin" . PHP_EOL;
echo "Alamat               = $mahasiswaKedua->alamat" . PHP_EOL;
echo "Umur                 = $mahasiswaKedua->umur" .PHP_EOL;
echo "Angkatan             = $mahasiswaKedua->angkatan" . PHP_EOL;


?>