<?php
    require 'functions.php';

    if(isset($_POST['registrasi'])) {
        if(registrasi($_POST) > 0) {
            echo "<script>
                    alert('user baru berhasil ditambahkan, silahkan login');
                    document.location.href = 'login.php';
                 </script>";
        } else {
            echo 'user gagal ditambahkan';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrasi</title>
</head>
<body>
    <h3>form registrasi</h3>

    <form action="" method="post">
        <ul>
            <li>
                <label>
                    username :
                    <input type="text" name="username" autofocus autocomplete="off" required>
                </label>
            </li>

            <li>
                <label>
                    password :
                    <input type="password" name="password1" required>
                </label>
            </li>

            <li>
                <label>
                    konfirmasi password :
                    <input type="password" name="password2" required>
                </label>
            </li>

            <li>
                <button type="submit" name="registrasi">registrasi</button>
            </li>
        </ul>
    </form>
</body>
</html>