<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST['password'];
    $errors = array();
    //Validasi Nama
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }
    //Validasi Email
    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }
    // Validasi Password
    if (empty($password)) {
        $errors[] = "Password harus diisi.";
    } else if (strlen($password) < 8) { // Memeriksa panjang password
        $errors[] = "Password harus memiliki minimal 8 karakter.";
    }
    //Jika ada kesalahan validasi
    if (!empty($errors)) {
        foreach($errors as $error) {
            echo $error . "<br>";
        }
    }else {
        echo "Data berhasil dikirim : Nama = $nama, Email = $email, Password = $password";
    }
}
?>