<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <style>
            table {
                border-collapse: collapse;
                width: 50%;
                margin: auto;
            }
            th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        <?php
            // $Dosen = [
            //     'nama' => 'Elok Nur Hamdana',
            //     'domisili' => 'Malang',
            //     'jenis_kelamin' => 'Perempuan'];
            // echo "Nama : {$Dosen ['nama']} <br>";
            // echo "Domisili : {$Dosen ['domisili']} <br>";
            // echo "Jenis Kelamin : {$Dosen ['jenis_kelamin']} <br>";

            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan'
            ];
            echo "<table>";
            echo "<tr><th colspan='2'>Informasi Dosen</th></tr>";
            foreach ($Dosen as $key => $value) {
                echo "<tr><td>$key</td><td>$value</td></tr>";
            }
            echo "</table>";
        ?>
    </body>
</html>