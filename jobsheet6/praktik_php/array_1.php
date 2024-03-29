<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h2>Array Terindeks</h2>
        <?php
            $Listdosen=["Elok Nur HAmdana", "Unggul Pamenang", "Bagus Nugraha"];

            // echo $Listdosen[2] . "<br>";
            // echo $Listdosen[0] . "<br>";
            // echo $Listdosen[1] . "<br>";

            //LANGKAH 4
            for($i = 0; $i < count($Listdosen); $i++){
                echo $Listdosen[$i] . "<br>";
            }
        ?>
    </body>
</html>