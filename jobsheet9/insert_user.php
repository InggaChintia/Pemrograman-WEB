<?php
    $id = "id";
    $username = 'nama_pengguna';
    $password = "kata_sandi";
    $dbname = "nama_database";
    //buat koneksi
    $conn = mysqli_connect($id, $username, $password, $dbname);
    //periksa koneksi
    if (!$conn) {
        die("Koneksi gagal : " . mysqli_connect_error());
    }
    //data yang akan di input
    $id = "contoh_id";
    $username = "contoh_username";
    $password = "contoh_password";
    //koneksi
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "prakwebdb";
    //query buat input data e tabel user
    $query = "INSERT INTO user (id, username, password) 
    VALUES ('$id', '$username', '$password')";
    //eksekusi query
    if (mysqli_query($conn, $query)) {
        echo "Table user berhasil dibuat.";
    }else {
        echo "Error : " . mysqli_error($conn);
    }
    //tutup koneksi
    mysqli_close($conn);
?>