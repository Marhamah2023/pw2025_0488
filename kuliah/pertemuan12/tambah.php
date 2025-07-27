<?php

    session_start();

    if(!isset($_SESSION['login'])) {
        header("Location: login.php");
        exit;
    }

    require 'functions.php';

    //apakah tombol tambah sdh ditekan
    if(isset($_POST['tambah'])) {
        if(tambah($_POST) > 0) {
            echo "<script>
                    alert('data berhasil ditambahan');
                    document.location.href = 'index.php';
                  </script>";
        } else {
            echo "data gagal ditambahkan";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data mahasiswa</title>
</head>
<body>
    <h3>form tambah data mahasiswa</h3>
    <form action="" method="post">
        <ul>
            <li>
                <label>
                    gambar : 
                    <input type="text" name="gambar" autofocus required>
                </label>
            </li>

            <li>
                <label>
                    nrp : 
                    <input type="text" name="nrp" required>
                </label>
            </li>

            <li>
                <label>
                    nama : 
                    <input type="text" name="nama" required>
                </label>
            </li>

            <li>
                <label>
                    email : 
                    <input type="text" name="email" required>
                </label>
            </li>

            <li>
                <label>
                    jurusan : 
                    <input type="text" name="jurusan" required>
                </label>
            </li>

            <li>
                <button type="submit" name="tambah" required>tambah data</button>
            </li>
        </ul>
    </form>
</body>
</html>