<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo base_url('welcome/proses_edit/'.$entry->id) ?>" method="POST" enctype="multipart/form-data">
    <h4>Form Edit</h4>
    	<table>
         <tr>
            <td><strong>Judul : </strong></td>
            <td> <input type="text" class="form-control" value="<?= $entry->judul ?>" placeholder="Judul" name="judul"></td>
         </tr>
         <tr>
             <td><strong>Isi : </strong></td>
             <td>
                 <input type="text" class="form-control" value="<?= $entry->isi ?>" placeholder="Isi" name="isi" name="isi">
             </td>
         </tr> 
         <tr>
             <td>Gambar :</td>
             <td>
                <input type="file" class="form-control" name="image" placeholder="Gambar">
                <img src="<?php echo $gambar ?>" style="width: 20%; " class="img-fluid" alt="Responsive image">
             </td>
         </tr>
         <tr>
             <td><button type="submit" class="btn btn-primary">Simpan</button></td>
         </tr>
        </table>
    </form>
</body>
</html>