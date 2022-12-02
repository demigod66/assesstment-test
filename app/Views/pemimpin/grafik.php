<?= $this->extend('partials/index') ?>

<?= $this->section('title') ?>


<title>Dashboard | Sistem Pembayaran SPP</title>

<?= $this->endSection() ?>



<?= $this->section('content') ?>


<section class="section">
    <div class="section-header">
        Grafik
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Status Pembayaran Aktif & Tidak Aktif</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="grafik" height="158"></canvas>
                    </div>
                </div>
            </div>
</section>


<?php foreach ($tagihan as $key => $value) {
    $db = \Config\Database::connect();


    $status_unactive = $db->table('tagihan')
        ->where('status_tagihan', 0)
        ->countAllResults();

    $status_active = $db->table('tagihan')
        ->where('status_tagihan', 1)
        ->countAllResults();

?>
<?php } ?>

<script>
    const ctx = document.getElementById('grafik');

    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['aktif', 'tidak aktif'],
            datasets: [{
                label: '# of Votes',
                data: [<?= $status_active ?>, <?= $status_unactive ?>],
                backgroundColor: [
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>


<?= $this->endSection() ?>