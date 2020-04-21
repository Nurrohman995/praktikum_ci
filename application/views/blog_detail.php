<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo base_url('proses_tambah') ?>" method="POST">
    <h4>Detail</h4>
    	<table>
         <tr>
            <td><strong>Judul : </strong></td>
            <td><?= $entry->judul ?></td>
         </tr>
         <tr>
             <td><strong>Isi : </strong></td>
             <td>
                <?= $entry->isi ?>
             </td>
         </tr>
         <tr>
             <td><strong>Waktu</strong></td>
             <td><?= $entry->waktu ?></td>
         </tr>
        </table>
    </form>
</body>
</html>