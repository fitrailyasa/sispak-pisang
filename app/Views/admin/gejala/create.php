<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
Tambah Gejala
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-success m-2">
    <div class="card-header">
        <h3 class="card-title">Tambah Gejala</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="<?= route_to('gejala/store'); ?>">
        <?= csrf_field() ?>
        <div class="card-body">
            <div class="form-group">
                <label for="kode_gejala">Kode Gejala</label>
                <input type="text" class="form-control <?= session('errors.kode_gejala') ? 'is-invalid' : ''; ?>" id="kode_gejala" placeholder="Masukkan kode gejala" value="<?= old('kode_gejala'); ?>" name="kode_gejala" required autocomplete="kode_gejala" autofocus>
                <?php if (session('errors.kode_gejala')) : ?>
                    <div class="invalid-feedback">
                        <?= session('errors.kode_gejala') ?>
                    </div>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="nama_gejala">Nama Gejala</label>
                <input type="text" class="form-control <?= session('errors.nama_gejala') ? 'is-invalid' : ''; ?>" id="nama_gejala" placeholder="Masukkan nama gejala" value="<?= old('nama_gejala'); ?>" name="nama_gejala" required autocomplete="nama_gejala">
                <?php if (session('errors.nama_gejala')) : ?>
                    <div class="invalid-feedback">
                        <?= session('errors.nama_gejala') ?>
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
