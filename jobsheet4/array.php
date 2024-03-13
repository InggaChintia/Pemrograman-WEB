<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}
echo "Daftar nilai siswa yang lulus : " . implode(',', $nilaiLulus);

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];
$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}
echo "<br><br>";
echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun : " . implode(', ', $karyawanPengalamanLimaTahun);

echo "<br><br>";
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika'=> [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];
$mataKuliah = 'Fisika';
echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah : <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama : {$nilai[0]}, Nilai : {$nilai[1]} <br>";
}


//SOAL CERITA NO 5.4
echo "<br><br>SOAL CERITA NO 5.4
<br>Seorang guru ingin mencetak daftar nilai siswa dalam ujian matematika. 
<br>Guru tersebut memiliki data setiap siswa terdrir dari nama dan nilai. 
<br>Bantu guru ini mencetak daftar nilai siswa yang mencapai nilai di atas rata-rata kelas. 
<br>Dengan ketentuan nama dan nilai siswa Alice dapat 85, Bob dapat 92, Charlie dapat 78, 
David dapat 64, Eva dapat 90<br><br>";
$dataSiswa = [
    ["Alice", 85],
    ["Bob", 92],
    ["Charlie", 78],
    ["David", 64],
    ["Eva", 90]
];
//menghitung rata-rata kelas
$totalNilai = 0;
foreach ($dataSiswa as $siswa){
    $totalNilai += $siswa[1]; //indeks 1 untuk nilai siswa
}
$rataRataKelas = $totalNilai / count($dataSiswa);

echo "Rata-rata nilai kelas : $rataRataKelas <br>";
echo "Daftar siswa dengan nilai diatas rata-rata kelas : <br>";
foreach ($dataSiswa as $siswa) {
    if ($siswa[1] > $rataRataKelas){
        echo "Nama " . $siswa[0] . ", Nilai : " . $siswa[1] . "<br>";
    }
}

?>