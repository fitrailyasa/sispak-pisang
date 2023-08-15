<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
Tambah Solusi
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-success m-2">
    <div class="card-header">
        <h3 class="card-title">Tambah Solusi</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="<?= route_to('solusi/store'); ?>">
        <?= csrf_field() ?>
        <div class="card-body">
            <div class="form-group">
                <label for="kode_kerusakan">Penyakit</label>
                <label for="kode_kerusakan"></label>
                    <select class="form-select form-select-sm" name="kode_kerusakan" aria-label=".form-select-sm example">
                        <option selected>Pilih</option>
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
                <label for="nama_solusi">Solusi</label>
                <input type="text" class="form-control" id="nama_solusi" placeholder="Masukkan nama solusi" value="<?= old('nama_solusi'); ?>" name="nama_solusi" required autocomplete="nama_solusi">
                <?php if (session('errors.nama_solusi')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.nama_solusi') ?></strong>
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