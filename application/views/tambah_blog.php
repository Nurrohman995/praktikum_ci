<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo base_url('proses_tambah') ?>" method="POST">
    <h4>Form Input</h4>
    	<table>
         <tr>
            <td><strong>Judul : </strong></td>
            <td> <input type="text" class="form-control" placeholder="Judul" name="judul"></td>
         </tr>
         <tr>
             <td><strong>Isi : </strong></td>
             <td>
                 <input type="text" class="form-control" placeholder="Isi" name="isi" name="isi">
             </td>
         </tr> 
         <tr>
             <td><button type="submit" class="btn btn-primary">Simpan</button></td>
         </tr>
        </table>
    </form>
</body>
</html>