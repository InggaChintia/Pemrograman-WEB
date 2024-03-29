<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedBuah = $_POST['buah'];
    if (isset($_POST['WARNA'])) {
        $selectedWarna = $_POST['warna'];
    }else {
        $selectedWarna = [];
    }
    $selectedJenisKelamin = $_POST['jenis_kelamin'];
    echo "Anda memilih buah : " . $selectedBuah . "<br>";
    if (!empty($selectedWarna)) {
        echo "Warna favorit Anda : " . implode(", ", $selectedWarna) . "<br>";
    }else {
        echo "Anda tidak memilih waran favorit.<br>";
    }
    echo "Jenis kelamin Anda : " . $selectedJenisKelamin;
}
?>