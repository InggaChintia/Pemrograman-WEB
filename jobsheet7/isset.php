<?php

//LANGKAH 3
$umur;
if (isset($umur) && $umur >= 18) {
    echo "Anda sudah dewasa.";
} else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.";
}

//LANGKAH 5
$data = array("nama" => "Jane", "usia" => 25);
if (isset($data["nama"])) {
    echo "<br>Nama : " . $data["nama"];
}else {
    echo "<br>Variabel 'nama' tidak ditemukan dalam array.";
}
?>