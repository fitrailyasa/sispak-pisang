<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
Edit Gejala
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-success m-2">
    <div class="card-header">
        <h3 class="card-title">Edit Gejala</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="<?= route_to('gejala/update', $gejala['kode_gejala']); ?>">
        <?= csrf_field() ?>
        <div class="card-body">
            <div class="form-group">
                <label for="kode_gejala">Kode Gejala</label>
                <input type="text" class="form-control" id="kode_gejala" value="<?= $gejala['kode_gejala']; ?>" readonly name="kode_gejala">
            </div>
            <div class="form-group">
                <label for="nama_gejala">Nama Gejala</label>
                <input type="text" class="form-control <?= session('errors.nama_gejala') ? 'is-invalid' : ''; ?>" id="nama_gejala" value="<?= old('nama_gejala') ?: $gejala['nama_gejala']; ?>" name="nama_gejala" required autofocus>
                <?php if (session('errors.nama_gejala')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.nama_gejala') ?></strong>
                    </span>
                <?php endif ?>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="<?= route_to('gejala'); ?>" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
<?= $this->endSection() ?>