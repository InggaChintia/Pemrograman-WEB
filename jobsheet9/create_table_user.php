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
    //create table user
    $query = "CREATE TABLE user (
        id int auto_increment primary key, username varchar(50) not null,
        password varchar(50) not null)";
    //eksekusi query
    if (mysqli_query($conn, $query)) {
        echo "Table user berhasil dibuat.";
    }else {
        echo "Error : " . mysqli_error($conn);
    }
    //tutup koneksi
    mysqli_close($conn);
?>