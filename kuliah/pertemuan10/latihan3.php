<?php
    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar mahasiswa</title>
</head>
<body>
    <h3>daftar mahasiswa</h3>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>gambar</th>
            <th>nama</th>
            <th>aksi</th>
        </tr>

        <?php $i = 1; foreach($mahasiswa as $m) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><img src="img/<?= $m['gambar']; ?>" width="50px"></td>
            <td><?= $m['nama']; ?></td>
            <td>
                <a href="detail.php?id=<?= $m['id']; ?>">detail</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>