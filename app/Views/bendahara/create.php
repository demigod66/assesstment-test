<?= $this->extend('partials/index') ?>

<?= $this->section('title') ?>


<title>Tambah Data Tagihan | Sistem Pembayaran SPP</title>

<style>
.input-symbol-euro {
    position: relative;
}

.input-symbol-euro input {
    padding-left: 18px;
}

.input-symbol-euro:after {
    position: absolute;
    top: 0;
    content: "Rp.";
    left: 5px;
}
</style>


<?= $this->endSection() ?>



<?= $this->section('content') ?>



<section class="section">
    <div class="section-header">
        <h1>Tambah Data Tagihan</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a href="<?= site_url('/bendahara/tagihan') ?>" class="btn btn-warning btn-sm">Kembali</a>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <form class="form-horizontal" id="form">
                                    <?= csrf_field() ?>
                                    <input type="hidden" value="" name="id" />
                                    <div class="form-group">
                                        <label>Nama Mahasiswa</label>
                                        <select name="nama_mahasiswa" id="nama_mahasiswa" class="form-control">
                                            <option value="" holder>Pilih Nama Mahasiswa</option>
                                            <?php foreach ($users->getResult('array') as $value) :  ?>
                                            <option value="<?= $value['id_user'] ?>"><?= $value['name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Status Tagihan</label>
                                        <select name="status_tagihan" id="status_tagihan" class="form-control">
                                            <option value="0">Aktif</option>
                                            <option value="1">Tidak Aktif</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Total Tagihan</label>
                                        <span class="input-symbol-euro">
                                            <input type="total_tagihan" name="total_tagihan" class="form-control"
                                                value="0" min="0" step="1" />
                                        </span>

                                    </div>
                                    <div id="thumbnail-preview"></div>
                                    <button type="button" onclick="simpan()" class="btn btn-info">Simpan</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
function simpan() {
    let dataJson = {
        [csrfName]: csrfHash, // adding csrf here
        nama_mahasiswa: $("#nama_mahasiswa").val(),
        status_tagihan: $("#status_tagihan").val(),
        total_tagihan: $("#total_tagihan").val()
    };
    $.ajax({
        url: "<?= site_url('/bendahara/tagihan/simpan') ?>",
        data: new FormData($('#form')[0]),
        type: "POST",
        dataType: 'JSON',
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function(data) {
            $('#form').trigger("reset");
            $('#modal-form').modal('hide');
            swal({
                title: 'Berhasil',
                type: 'success',
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
            }).then(function() {
                reload();
            });
        },
        error: function(jqXHR, textStatus, errorThrown) {
            swal({
                title: 'Terjadi kesalahan',
                type: 'error',
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
            });
        }
    });
}
</script>

<?= $this->endSection() ?>