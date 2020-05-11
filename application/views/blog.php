<h3 style="text-align: center; font-size: 34px; margin-bottom: 16px;">Blog Keren</h3>

<img src="<?php echo base_url('assets/img/boboiboy.jpg') ?>" style="width: 40%; display: block; margin-left: auto; margin-right: auto;" class="img-fluid center" alt="Responsive image">
<div class="card-body">
    <a class="btn btn-primary btn-sm" href="<?= base_url('tambah') ?>"><i class="fa fa-plus"></i> Tambah</a>
    <div class="col-md-8">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
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
                            <a href="<?php echo base_url('welcome/detail/'.$e->id) ?>" class="btn btn-primary btn-sm"> Baca</a> <a href="<?php echo base_url('welcome/edit/'.$e->id) ?>" class="btn btn-success btn-sm"> Edit</a> <a href="<?php echo base_url('welcome/delete/'.$e->id) ?>" class="btn btn-danger btn-sm" onClick="return doconfirm();"> Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    function doconfirm()
    {
        job=confirm("Are you sure to delete permanently?");
        if(job!=true)
        {
            return false;
        }
    }
</script>