<?php
//LANGKAH 1
// function perkenalan() {
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan, nama saya Ingga<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// //memanggil fungsi yang sudah dibuat
// perkenalan();
// perkenalan();

//LANGKAH 4
// function perkenalan($nama, $salam) {
//     echo $salam . ", ";
//     echo "Perkenalkan, nama saya ".$nama."<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// //memanggil fungsi yang sudah dibuat
// perkenalan("Hamdana", "Hallo");
// echo "<hr>";

// $saya = "Ingga";
// $ucapanSalam = "Selamat pagi";

// //memanggil lagi
// perkenalan($saya, $ucapanSalam);

//LANGKAH 7
// function perkenalan($nama, $salam = "Assalamualaikum") {
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

//memanggil fungsi yang sudah dibuat
// perkenalan("Hamdana", "Hallo");

// echo "<hr>";

// $saya = "Ingga";
// $ucapanSalam = "Selamat pagi";

// //memanggil lagi tanpa mengisi parameter salam
// perkenalan($saya);

//LANGKAH 10
// function hitungUmur($thn_lahir, $thn_sekarang){
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }

// echo "Umur saya adalah ". hitungUmur(2004, 2024) . " tahun"

//LANGKAH 13
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.",";
    echo "Perkenalkan, nama saya ".$nama."<br/>";

    //mamanggil fungsi lain
    echo "Saya berusia ".hitungUmur(2004, 2024)." tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

//memanggil fungsi perkenalan
    perkenalan("Ingga");
?>