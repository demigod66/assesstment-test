<?= $this->extend('partials/index') ?>

<?= $this->section('title') ?>


<title>Dashboard | Sistem Pembayaran SPP</title>

<?= $this->endSection() ?>



<?= $this->section('content') ?>


<section class="section">
    <div class="section-header">
        <h1>Selamat Datang <?= ucfirst(userlogin()->name) ?></h1>
    </div>

    <div class="section-body">
    </div>
</section>


<?= $this->endSection() ?>