<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Blog Keren</h1>
    <h3>My Name is <?= $penulis ?></h3>
    <h3>Nim : <?= $nim ?>
    <br>
    <br>
    <a href="<?= base_url('tambah') ?>">Tambah</a>
    <table border="1">
        <thead>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Waktu</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php $no =1; foreach($entries as $e) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $e->judul ?></td>
                <td><?= $e->isi ?></td>
                <td><?= $e->waktu ?></td>
                <td>
                    <a href="<?php echo base_url('welcome/detail/'.$e->id) ?>">Baca</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
