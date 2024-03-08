<?php
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

echo "Varibel a: {$a} <br>";
echo "Varibel b: {$b} <br>";
echo "Varibel c: {$c} <br>";
echo "Varibel d: {$d} <br>";
echo "Varibel e: {$e} <br>";

var_dump($e);

$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia)/3;

echo "Matematika : {$nilaiMatematika} <br>";
echo "IPA : {$nilaiIPA} <br>";
echo "Bahasa Indonesia : {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata : {$rataRata} <br>";

var_dump($rataRata);

$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;
echo "<br>";

var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);

echo "<br>";
$namaDepan = "Ibnu";
$namaBelakang = 'Jakaria ';

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

echo "Nama Depan : {$namaDepan} <br>";
echo 'Nama Belakang : ' . $namaBelakang . '<br>';

echo $namaLengkap;

$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo $listMahasiswa[0];
?>