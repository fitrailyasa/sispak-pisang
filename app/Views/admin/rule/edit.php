<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
Edit Rule
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-success m-2">
    <div class="card-header">
        <h3 class="card-title">Edit Rule</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="<?= route_to('rule/update', $rule['id']); ?>">
        <?= csrf_field() ?>
        <div class="card-body">
            <div class="form-group">
                <label for="kode_rule">Kode Rule</label>
                <input type="text" class="form-control" id="kode_rule" value="<?= $rule['kode_rule']; ?>" readonly name="kode_rule">
            </div>
            <div class="form-group">
                <label for="kode_gejala">Kode Gejala</label>
                <label for="kode_gejala"></label>
                    <select class="form-select form-select-sm" name="kode_gejala" aria-label=".form-select-sm example">
                        <option selected><?= $rule['kode_gejala']; ?></option>
                        <?php foreach ($gejalas as $gejala) : ?>
                            <option value="<?= $gejala['kode_gejala'] ?>"><?= $gejala['kode_gejala'] ?> | <?= $gejala['nama_gejala'] ?></option>
                        <?php endforeach; ?>
                    </select><?php if (session('errors.kode_gejala')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.kode_gejala') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="kode_kerusakan">Kode Kerusakan</label>
                <label for="kode_kerusakan"></label>
                    <select class="form-select form-select-sm" name="kode_kerusakan" aria-label=".form-select-sm example">
                        <option selected><?= $rule['kode_kerusakan']; ?></option>
                        <?php foreach ($kerusakans as $kerusakan) : ?>
                            <option value="<?= $kerusakan['kode_kerusakan'] ?>"><?= $kerusakan['kode_kerusakan'] ?> | <?= $kerusakan['nama_kerusakan'] ?></option>
                        <?php endforeach; ?>
                    </select><?php if (session('errors.kode_kerusakan')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.kode_kerusakan') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="bobot_pakar">Bobot Pakar</label>
                <input type="text" class="form-control <?= session('errors.bobot_pakar') ? 'is-invalid' : ''; ?>" placeholder="Masukkan bobot pakar (0.7)" id="bobot_pakar" value="<?= old('bobot_pakar') ?: $rule['bobot_pakar']; ?>" name="bobot_pakar" required autofocus>
                <?php if (session('errors.bobot_pakar')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.bobot_pakar') ?></strong>
                    </span>
                <?php endif ?>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="<?= route_to('rule'); ?>" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
<?= $this->endSection() ?>