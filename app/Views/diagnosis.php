<?= $this->extend('layouts/app') ?>

<?= $this->section('title') ?>
Diagnosa
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="text-center p-3">
    <h3><b>Diagnosa Penyakit</b></h3>
    <h5 class="responsive-font">Solusi cepat mengetahui Penyakit tanaman pisang anda!</h5>
</div>
<div class="card">
    <div class="card-header bg-success pt-4 px-4">
        <h4 class="mx-4 responsive-font"><a class="text-white pr-3" href="<?= route_to('/') ?>"><i class="fa fa-arrow-left fa-sm" aria-hidden="true"></i></a>Daftar Gejala</h4>
    </div>
    <div class="card-body p-4 mx-4">
        <form action="<?= route_to('diagnosis/hasil') ?>" method="POST">
            <label for="jenis_pisang">Jenis Pisang :</label>
            <input class="form-control" type="text" name="jenis_pisang" value="<?= old('jenis_pisang'); ?>" placeholder="jenis pisang anda (wajib)" required><br>
            <p>Silahkan pilih gejala-gejala yang dialami oleh tanaman pisang beserta intensitasnya. Gejala lainnya dapat diabaikan apabila tidak dialami oleh tanaman pisang anda</p>
            <?php $i = 1; foreach ($gejalas as $gejala) : ?>
                <div class="card p-3">
                    <input type="hidden" name="kode_gejala_<?= $i ?>" value="<?= $gejala['kode_gejala'] ?>">
                    <label for="gejala"><?= $i++ ?>. <?= $gejala['nama_gejala'] ?> (<?= $gejala['kode_gejala'] ?>)</label>
                    <select class="form-select form-select-sm" name="bobot_pengguna_<?= $i-1 ?>" aria-label=".form-select-sm example">
                        <option selected value="0">Pilih</option>
                        <?php foreach ($cfPenggunas as $cf_pengguna) : ?>
                            <option value="<?= $cf_pengguna['bobot_pengguna'] ?>"><?= $cf_pengguna['certainty_term'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            <?php endforeach; ?>
            <div class="text-center pb-3">
                <input type="submit" class="btn btn-success" value="Submit">
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>



<!-- <label for="gejala"><?= $i++ ?>. <?= $gejala['nama_gejala'] ?></label><br>
<?php foreach ($cfPenggunas as $cf_pengguna) : ?>
    <p><input type="radio" name="<?= $gejala['kode_gejala'] ?>" value="<?= $cf_pengguna['bobot_pengguna'] ?>"><?= $cf_pengguna['certainty_term'] ?></p>
<?php endforeach; ?> -->