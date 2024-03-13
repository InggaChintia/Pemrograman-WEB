<?php
$nilaiNumerik = 92;

if($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf : A";
} else if ($nilaiNumerik >= 80 && $nilaiNumerik < 90){
    echo "Nilai huruf : B";
} else if ($nilaiNumerik >= 70 && $nilaiNumerik < 80){
    echo "Nilai huruf : C";
} else if ($nilaiNumerik < 70) {
    echo "Nilai huruf : D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "<br>";
echo " Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++){
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}
echo "<br><br>";
echo "Jumlah buah yang akan dipanen adalah : $jumlahBuah";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "<br><br>";
echo "Total skor ujian adalah : $totalSkor";

echo "<br><br>";
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai : $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai : $nilai (Lulus) <br>";
}

//SOAL CERITA NO 4.6
echo "<br>SOAL CERITA NO 4.6 <br> Ada seorang guru ingin menghitung total nilai dari 10 siswa dalam ujian matematika. 
Guru ini ingin mengabaikan dua nilai tertinggi dan dua nilai terendah. 
<br> Bantu guru ini menghitung total nilai yang akan digunakan untuk menentukan 
nilai rata-rata setelah mengabaikan nilai tertinggi dan terendah. 
<br> Berikut daftar nilai dari 10 siswa (85, 92, 78, 64, 90, 75, 88, 79, 70, 96)";
$nilaiSiswa = array(85, 92, 78, 64, 90, 75, 88, 79, 70, 96);
// Mengurutkan nilai dari yang terkecil ke terbesar
sort($nilaiSiswa);
// Mengabaikan dua nilai terendah dan dua nilai tertinggi
$nilaiSiswa = array_slice($nilaiSiswa, 2, -2);
$totalNilai = array_sum($nilaiSiswa);
// Menghitung jumlah nilai yang dihitung
$jumlahNilai = count($nilaiSiswa);
// Menghitung nilai rata-rata
$nilaiRataRata = $totalNilai / $jumlahNilai;
echo "<br><br> Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $totalNilai";
echo "<br>Nilai rata-rata setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $nilaiRataRata";

//SOAL CERITA NO 4.7
echo "<br><br>SOAL CERITA NO 4.7
<br>Seorang pelanggan ingin membeli sebuah produk dengan harga Rp 120.000. 
<br>Toko tersebut menawarkan diskon sebesar 20% untuk pembelian di atas Rp 100.000. 
<br>Bantu pelanggan ini untuk menghitung harga yang harus dibayar setelah mendapatkan diskon.";
$hargaProduk = 120000;
$diskon = 20;
$batasDiskon = 100000;
// Hitung harga setelah diskon
if ($hargaProduk > $batasDiskon) {
    $diskon = $hargaProduk * ($diskon / 100);
    // Harga setelah diskon
    $hargaSetelahDiskon = $hargaProduk - $diskon;
    echo "<br><br> Harga yang harus dibayar setelah mendapatkan diskon: Rp " . number_format($hargaSetelahDiskon, 2);
} else {
    echo "<br> Harga yang harus dibayar: Rp " . number_format($hargaProduk, 2);
}

//SOAL CERITA NO 4.8
echo "<br><br>SOAL CERITA NO 4.8
<br>Seorang pemain game ingin menghitung total skor mereka dalam permainan. 
<br>Mereka mendapatkan skor berdasarkan poin yang mereka kumpulkan. 
<br>Jika mereka memiliki lebih dari 500 poin, maka mereka akan mendapatkan hadiah tambahan. 
<br>Buat tampilan baris pertama “Total skor pemain adalah: (poin)”. 
<br>Dan baris kedua “Apakah pemain mendapatkan hadiah tambahan? (YA/TIDAK)”";
$poin = 750;
echo "<br><br>Total skor pemain adalah: $poin\n";
// Apakah pemain mendapatkan hadiah tambahan?
if ($poin > 500) {
    echo "Apakah pemain mendapatkan hadiah tambahan? YA";
} else {
    echo "Apakah pemain mendapatkan hadiah tambahan? TIDAK";
}

?>