<?php
$a = 10;
$b = 5;

echo "Variabel a : {$a} <br>";
echo "Variabel b : {$b} <br>";
echo "<br>";

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah a + b : {$hasilTambah} <br>";
echo "Hasil Pengurangan a - b : {$hasilKurang} <br>";
echo "Hasil Perkalian a * b : {$hasilKali} <br>";
echo "Hasil Pembagian a / b : {$hasilBagi} <br>";
echo "Sisa Pembagian  a % b : {$sisaBagi} <br>";
echo "Hasil Pangkat a**b : {$pangkat} <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<br>";
echo "Hasil Sama a == b: {$hasilSama} <br>";
echo "Hasil Tidak Sama a != b: {$hasilTidakSama} <br>";
echo "Hasil Lebih Kecil a < b: {$hasilLebihKecil} <br>";
echo "Hasil Lebih Besar a > b: {$hasilLebihBesar} <br>";
echo "Hasil Lebih Kecil Sama a <= b: {$hasilLebihKecilSama} <br>";
echo "Hasil Lebih Besar Sama a >= b: {$hasilLebihBesarSama} <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<br>";
echo "Hasil AND a && b : {$hasilAnd} <br>";
echo "Hasil OR a || b : {$hasilOr} <br>";
echo "Hasil NOT A !a : {$hasilNotA} <br>";
echo "Hasil NOT B !b : {$hasilNotB} <br>";

$tambah = $a += $b;
$kurang = $a -= $b;
$kali = $a *= $b;
$bagi = $a /= $b;
$persen = $a %= $b;

echo "<br>";
echo "Hasil Tambah a += b: {$tambah} <br>";
echo "Hasil Kurang a -= b: {$kurang} <br>";
echo "Hasil Kali a *= b: {$kali} <br>";
echo "Hasil Bagi a /= b: {$bagi} <br>";
echo "Sisa Bagi a %= b: {$persen} <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<br>";
echo "Hasil Identik a === b : {$hasilIdentik} <br>";
echo "Hasil Tidak Tdentik a !== b: {$hasilTidakIdentik} <br>";

echo "<br> SOAL CERITA <br>";
$totalKursi = 45;
$kursiTerisi = 28;

$kursiKosong = $totalKursi - $kursiTerisi;
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "Jumlah kursi yang masih kosong di restoran adalah: " . $kursiKosong . " kursi.<br>";
echo "Persentase kursi yang masih kosong di restoran adalah: " . number_format($persentaseKosong, 2) . "%.";
?>