<?php
    require 'functions.php';

    //jika tdk ada id di url
    if (!isset($_GET['id'])) {
        header("Location: index.php");
        exit;
    }

    //ambil id dari url
    $id = $_GET['id'];

    //query mhs berdasarkan id
    $m = query("SELECT * FROM mahasiswa WHERE id = $id");

    //apakah tombol ubah sdh ditekan
    if(isset($_POST['ubah'])) {
        if(ubah($_POST) > 0) {
            echo "<script>
                    alert('data berhasil diubah');
                    document.location.href = 'index.php';
                  </script>";
        } else {
            echo "data gagal diubah";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah data mahasiswa</title>
</head>
<body>
    <h3>form ubah data mahasiswa</h3>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $m['id']; ?>">
        <ul>
            <li>
                <label>
                    gambar : 
                    <input type="text" name="gambar" autofocus required value="<?= $m['gambar']; ?>">
                </label>
            </li>

            <li>
                <label>
                    nrp : 
                    <input type="text" name="nrp" required value="<?= $m['nrp']; ?>">
                </label>
            </li>

            <li>
                <label>
                    nama : 
                    <input type="text" name="nama" required value= "<?= $m['nama']; ?>">
                </label>
            </li>

            <li>
                <label>
                    email : 
                    <input type="text" name="email" required value="<?= $m['email']; ?>">
                </label>
            </li>

            <li>
                <label>
                    jurusan : 
                    <input type="text" name="jurusan" required value="<?= $m['jurusan']; ?>">
                </label>
            </li>

            <li>
                <button type="submit" name="ubah" required>ubah data</button>
            </li>
        </ul>
    </form>
</body>
</html>