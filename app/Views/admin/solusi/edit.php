<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
Edit Solusi
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-success m-2">
    <div class="card-header">
        <h3 class="card-title">Edit Solusi</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="<?= route_to('solusi/update', $solusi['id']); ?>">
        <?= csrf_field() ?>
        <div class="card-body">
            <div class="form-group">
                <label for="kode_kerusakan">ID Penyakit</label>
                <input type="text" class="form-control" id="kode_kerusakan" value="<?= $solusi['kode_kerusakan']; ?>" readonly name="kode_kerusakan">
            </div>
            <div class="form-group">
                <label for="nama_solusi">Solusi</label>
                <input type="text" class="form-control <?= session('errors.nama_solusi') ? 'is-invalid' : ''; ?>" id="nama_solusi" value="<?= old('nama_solusi') ?: $solusi['nama_solusi']; ?>" name="nama_solusi" required autofocus>
                <?php if (session('errors.nama_solusi')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.nama_solusi') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="kode_kerusakan">Kerusakan Baru</label>
                <label for="kode_kerusakan"></label>
                    <select class="form-select form-select-sm" name="kode_kerusakan" aria-label=".form-select-sm example">
                        <option selected>Pilih</option>
                        <?php foreach ($kerusakans as $kerusakan) : ?>
                            <option value="<?= $kerusakan['kode_kerusakan'] ?>"><?= $kerusakan['kode_kerusakan'] ?> | <?= $kerusakan['nama_kerusakan'] ?></option>
                        <?php endforeach; ?>
                    </select>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="<?= route_to('solusi'); ?>" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
<?= $this->endSection() ?>