<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
Tambah Rule
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-success m-2">
    <div class="card-header">
        <h3 class="card-title">Tambah Rule</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="<?= route_to('rule/store'); ?>">
        <?= csrf_field() ?>
        <div class="card-body">
            <div class="form-group">
                <label for="kode_rule">Kode Rule</label>
                <input type="text" class="form-control <?= session('errors.kode_rule') ? 'is-invalid' : ''; ?>" id="kode_rule" placeholder="Masukkan kode rule" value="<?= old('kode_rule'); ?>" name="kode_rule" required autocomplete="kode_rule" autofocus>
                <?php if (session('errors.kode_rule')) : ?>
                    <div class="invalid-feedback">
                        <?= session('errors.kode_rule') ?>
                    </div>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="kode_gejala">Gejala</label>
                <label for="kode_gejala"></label>
                    <select class="form-select form-select-sm" name="kode_gejala" aria-label=".form-select-sm example">
                        <option selected>Pilih</option>
                        <?php foreach ($gejalas as $gejala) : ?>
                            <option value="<?= $gejala['kode_gejala'] ?>"><?= $gejala['kode_gejala'] ?> | <?= $gejala['nama_gejala'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?php if (session('errors.kode_gejala')) : ?>
                    <div class="invalid-feedback">
                        <?= session('errors.kode_gejala') ?>
                    </div>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="kode_kerusakan">Kerusakan</label>
                <label for="kode_kerusakan"></label>
                    <select class="form-select form-select-sm" name="kode_kerusakan" aria-label=".form-select-sm example">
                        <option selected>Pilih</option>
                        <?php foreach ($kerusakans as $kerusakan) : ?>
                            <option value="<?= $kerusakan['kode_kerusakan'] ?>"><?= $kerusakan['kode_kerusakan'] ?> | <?= $kerusakan['nama_kerusakan'] ?></option>
                        <?php endforeach; ?>
                    </select>
                <?php if (session('errors.kode_kerusakan')) : ?>
                    <div class="invalid-feedback">
                        <?= session('errors.kode_kerusakan') ?>
                    </div>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="bobot_pakar">Bobot Pakar</label>
                <input type="text" class="form-control <?= session('errors.bobot_pakar') ? 'is-invalid' : ''; ?>" id="bobot_pakar" placeholder="Masukkan bobot pakar (0.6)" value="<?= old('bobot_pakar'); ?>" name="bobot_pakar" required autocomplete="bobot_pakar">
                <?php if (session('errors.bobot_pakar')) : ?>
                    <div class="invalid-feedback">
                        <?= session('errors.bobot_pakar') ?>
                    </div>
                <?php endif ?>
            </div>
            <div class="">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </div>
        <!-- /.card-body -->
    </form>
</div>
<?= $this->endSection() ?>
