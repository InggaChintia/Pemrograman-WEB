<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi Anda</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            text-align: center;
            padding: 50px;
            background-image: url('img/gambar1..2.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        h2 {
            color: #007bff;
            margin-bottom: 20px;
        }

        .container {
            max-width: 700px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            font-size: 18px;
        }

        p {
            margin: 10px 0;
            font-size: 16px;
        }

        .button {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            margin-top: 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .alert {
            color: red;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari form
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        $paket_dipilih = $_POST['paket_dipilih'];
        $jumlah_orang = $_POST['jumlah_orang'];

        // Validasi data
        if (empty($nama) || empty($alamat) || empty($telepon) || empty($paket_dipilih) || empty($jumlah_orang)) {
            echo "<div class='alert'>Mohon lengkapi semua kolom!</div>";
            echo "<a href='index.html' class='button'>Kembali ke Form</a>";
            exit;
        }

        // mencetak data yang telah diisi
        echo "<h2>Selamat! Anda berhasil melakukan reservasi</h2>";
        echo "<p>Nama Lengkap: " . $nama . "</p>";
        echo "<p>Alamat: " . $alamat . "</p>";
        echo "<p>No. Telepon: " . $telepon . "</p>";
        echo "<p>Paket yang dipilih: " . $paket_dipilih . "</p>";
        echo "<p>Jumlah Orang: " . $jumlah_orang . "</p>";
        echo "<a href='index.html' class='button'>Kembali ke Home</a>";
    }
    ?>
</div>

</body>
</html>
