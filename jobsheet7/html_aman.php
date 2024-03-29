<!DOCTYPE html>
<html>
    <head>
        <title>Form Input PHP</title>
    </head>
    <body>
        <h2>Form Input PHP</h2>
        <?php
        $emailErr = "";
        $email = "";

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            //Mengambil nilai dari input email
            $email = $_POST["email"];

            //Memeriksa apakah input adalah alamat email yang valid
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Alamat email yang Anda masukkan ($email) adalah VALID. <br>";
            }else {
                $emailErr = "Alamat email tidak valid!";
            }
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST['input'];
            $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

            echo "Input yang Anda masukkan : " . $input . "<br>";
        }
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="input">Input :</label>
            <input type="text" name="input" id="input">
            <input type="submit" name="submit" valule="submit">

            <label for="email">Alamat Email :</label>
            <input type="text" name="email" id="email" value="<?php echo $email;?>">
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>
