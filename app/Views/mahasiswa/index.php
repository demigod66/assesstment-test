<?= $this->extend('partials/index') ?>

<?= $this->section('title') ?>


<title>Total Tagihan Mahasiswa | Sistem Pembayaran SPP</title>

<?= $this->endSection() ?>



<?= $this->section('content') ?>


<section class="section">
    <div class="section-header">
        <h1>Data Tagihan Mahasiswa</h1>
    </div>

    <div class="section-body">
        <div class="card shadow mb-4">
            <div class="card-header py-3">

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="10%">No</th>
                                <th>Nama Mahasiswa</th>
                                <th>Status Tagihan</th>
                                <th>Total Tagihan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $nomor = 0;
                            foreach ($tagihan->getResult('array') as $row) :
                                $nomor++;
                            ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $row['name'] ?></td>
                                    <?php if ($row['status_tagihan'] == 1) { ?>
                                        <td><a href="#" class="btn btn-success btn-sm">active</a></td>
                                    <?php } else {  ?>
                                        <td><a href="#" class="btn btn-danger btn-sm">unactive</a></td>
                                    <?php } ?>

                                    <td><?= $row['total_tagihan'] ?></td>
                                    <td>
                                        <a href="<?= site_url('mahasiswa/bayar') ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i>Bayar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').DataTable();
    })
</script>


<?= $this->endSection() ?>