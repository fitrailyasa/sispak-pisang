<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
Detail Penyakit
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-success m-2">
    <div class="card-header">
        <h3 class="card-title">Detail Penyakit</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="form-group">
            <label for="kode_kerusakan">Kode Penyakit</label>
            <input type="text" class="form-control" id="kode_kerusakan" value="<?= $kerusakan['kode_kerusakan']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="nama_kerusakan">Nama Penyakit</label>
            <input type="text" class="form-control" id="nama_kerusakan" value="<?= $kerusakan['nama_kerusakan']; ?>" readonly>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <a href="<?= route_to('kerusakan'); ?>" class="btn btn-success">Kembali</a>
    </div>
</div>
<?= $this->endSection() ?>