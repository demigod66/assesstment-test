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
        <h2 class="section-title">Tagihan</h2>
        <p class="section-lead">Silahkan Bayar Tagihan Anda</p>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="pricing pricing-highlight">
                    <div class="pricing-title">
                        BCA
                    </div>
                    <div class="pricing-padding">
                        <div class="pricing-price">
                            <?php $nomor = 0;
                            foreach ($tagihan->getResult('array') as $row) :
                                $nomor++;
                            ?>
                                <div>Rp.<?= $row['total_tagihan']  ?></div>
                                <div>BCA</div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="pricing-cta">
                    <a href="https://www.klikbca.com/">Bayar <i class="fas fa-arrow-right"></i></a>
                </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="pricing pricing-highlight">
                    <div class="pricing-title">
                        BNI
                    </div>
                    <div class="pricing-padding">
                        <div class="pricing-price">
                            <?php $nomor = 0;
                            foreach ($tagihan->getResult('array') as $row) :
                                $nomor++;
                            ?>
                                <div>Rp.<?= $row['total_tagihan']  ?></div>
                                <div>BNI</div>

                        </div>
                    <?php endforeach; ?>
                    </div>
                    <div class="pricing-cta">
                        <a href="https://www.bni.co.id/id-id/">Bayar <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</section>



<?= $this->endSection() ?>