<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
Detail Solusi
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-success m-2">
    <div class="card-header">
        <h3 class="card-title">Detail Solusi</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="form-group">
            <label for="kode_kerusakan">ID Penyakit</label>
            <input type="text" class="form-control" id="kode_kerusakan" value="<?= $solusi['kode_kerusakan']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="nama_solusi">Nama Solusi</label>
            <input type="text" class="form-control" id="nama_solusi" value="<?= $solusi['nama_solusi']; ?>" readonly>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <a href="<?= route_to('solusi'); ?>" class="btn btn-success">Kembali</a>
    </div>
</div>
<?= $this->endSection() ?>