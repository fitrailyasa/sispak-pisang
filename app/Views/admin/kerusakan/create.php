<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
Tambah Penyakit
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-success m-2">
    <div class="card-header">
        <h3 class="card-title">Tambah Penyakit</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="<?= route_to('kerusakan/store'); ?>">
        <?= csrf_field() ?>
        <div class="card-body">
            <div class="form-group">
                <label for="kode_kerusakan">Kode Penyakit</label>
                <input type="text" class="form-control" id="kode_kerusakan" placeholder="Masukkan kode Penyakit" value="<?= old('kode_kerusakan'); ?>" name="kode_kerusakan" required autocomplete="kode_kerusakan" autofocus>
                <?php if (session('errors.kode_kerusakan')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.kode_kerusakan') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="nama_kerusakan">Nama Penyakit</label>
                <input type="text" class="form-control" id="nama_kerusakan" placeholder="Masukkan nama Penyakit" value="<?= old('nama_kerusakan'); ?>" name="nama_kerusakan" required autocomplete="nama_kerusakan">
                <?php if (session('errors.nama_kerusakan')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.nama_kerusakan') ?></strong>
                    </span>
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