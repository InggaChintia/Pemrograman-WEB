
<!-- <!DOCTYPE html>
LANGKAH 2
<html>
    <head>
        <title>Form Input dengan Validasi</title>
    </head>
    <body>
        <h1>Form Input dengan Validasi</h1>
        <form method="post" action="proses_validasi.php">
            <label for="nama">Nama : </label>
            <input type="text" id="nama" name="nama">
            <br>
            <label for="email">Email : </label>
            <input type="text" id="email" name="email">
            <br><br>
            <input type="submit" value="submit">
        </form>
    </body>
</html> -->

<!--LANGKAH 6 -->
<!DOCTYPE html>
<html>
    <head>
        <title>Form Input dengan Validasi</title>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    </head>
    <body>
        <h1>Form Input dengan Validasi</h1>
        <form id="myForm" method="post" action="proses_validasi.php">
            <label for="nama">Nama : </label>
            <input type="text" id="nama" name="nama">
            <span id="nama-error" style="color : red;"></span>
            <br>
            <label for="email">Email : </label>
            <input type="text" id="email" name="email">
            <span id="email-error" style="color : red;"></span>
            <br>
            <label for="password">Password : </label>
            <input type="password" id="password" name="password">
            <span id="password-error" style="color: red;"></span>
            <br><br>
            <input type="submit" value="Submit">
        </form>
        <script>
            $(document).ready(function() {
                $("#myForm").submit(function(event) {
                    var nama = $("#nama").val();
                    var email = $("#email").val();
                    var password = $("#password"). val();
                    var valid = true;

                    if (nama === "") {
                        $("#nama-error").text("Nama harus diisi.");
                        valid = false;
                    }else {
                        $("nama-error").text("");
                    }
                    if (email === "") {
                        $("#email-error").text("Email harus diisi.");
                        valid = false;
                    }else {
                        $("#email-error").text("");
                    }
                    if (password === "") {
                        $("#password-error").text("Password harus diisi.");
                        valid = false;
                    }else if (password.length < 8) {
                        $("#password-error").text("Password harus memiliki 8 karakter.");
                        valid = false;
                    }
                    if (!valid) {
                        event.preventDefault(); //Mencegah pengiriman form secara default
                    }
                    if (valid) {
                        // Mengumpulkan data form
                        var formData = {
                            'nama': nama,
                            'email': email,
                            'password' : password
                        };
                        // Kirim data ke server PHP dengan Ajax
                        $.ajax({
                            type: 'POST',
                            url: 'proses_validasi.php',
                            data: formData,
                            success: function(response) {
                                // Tampilkan hasil dari server di div "hasil"
                                $("#hasil").html(response);
                            }
                        });
                    }
                });
            });
        </script>
    </body>
</html>