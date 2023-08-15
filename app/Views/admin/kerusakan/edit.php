<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
Edit Penyakit
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-success m-2">
    <div class="card-header">
        <h3 class="card-title">Edit Penyakit</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="<?= route_to('kerusakan/update', $kerusakan['kode_kerusakan']); ?>">
        <?= csrf_field() ?>
        <div class="card-body">
            <div class="form-group">
                <label for="kode_kerusakan">Kode Penyakit</label>
                <input type="text" class="form-control" id="kode_kerusakan" value="<?= $kerusakan['kode_kerusakan']; ?>" readonly name="kode_kerusakan">
            </div>
            <div class="form-group">
                <label for="nama_kerusakan">Nama Penyakit</label>
                <input type="text" class="form-control <?= session('error.nama_kerusakan') ? 'is-invalid' : ''; ?>" id="nama_kerusakan" value="<?= old('nama_kerusakan') ?: $kerusakan['nama_kerusakan']; ?>" name="nama_kerusakan" required autofocus>
                <?php if (session('error.nama_kerusakan')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('error.nama_kerusakan') ?></strong>
                    </span>
                <?php endif ?>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="<?= route_to('kerusakan'); ?>" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
<?= $this->endSection() ?>