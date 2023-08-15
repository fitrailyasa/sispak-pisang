<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
Detail Rule
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-success m-2">
    <div class="card-header">
        <h3 class="card-title">Detail Rule</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="form-group">
            <label for="kode_rule">Kode Rule</label>
            <input type="text" class="form-control" id="kode_rule" value="<?= $rule['kode_rule']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="kode_gejala">Kode Gejala</label>
            <input type="text" class="form-control" id="kode_gejala" value="<?= $rule['kode_gejala']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="kode_kerusakan">Kode Kerusakan</label>
            <input type="text" class="form-control" id="kode_kerusakan" value="<?= $rule['kode_kerusakan']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="bobot_pakar">Kode Gejala</label>
            <input type="text" class="form-control" id="bobot_pakar" value="<?= $rule['bobot_pakar']; ?>" readonly>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <a href="<?= route_to('rule'); ?>" class="btn btn-success">Kembali</a>
    </div>
</div>
<?= $this->endSection() ?>