<?php
// //membuat fungsi
// function perkenalan($nama, $salam="Assalamualaikum"){
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }
// //memanggil fungsi yang sudah dibuat
// perkenalan("Hamdana", "Hallo");

// echo "<hr>";

// $saya = "Ingga";
// $ucapSalam = "Selamat pagi";

// //memanggil lagi
// perkenalan($saya);

// // //membuat fungsi langkah 10
// function hitungUmur($thn_lahir, $thn_sekarang) {
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }

// echo "<br>Umur saya adalah ". hitungUmur(2004, 2024) ." tahun";

// //membuat fungsi langkah 13
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan ($nama, $salam="Assalamualaikum"){
    echo $salam.",";
    echo "Perkenalkan, nama saya ".$nama."<br/>";

    //memanggil fungsi lain 
    echo "Saya berusia ". hitungUmur(2004, 2024)." tahun<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}
//memanggil fungsi perkenalan
    perkenalan ("Ingga");

?>