<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
Detail Riwayat Diagnosis
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-success m-2">
    <div class="card-header">
        <h3 class="card-title">Detail Riwayat Diagnosis</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="form-group">
            <label for="token">Token</label>
            <input type="text" class="form-control" id="token" value="<?= $riwayat['token']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="jenis_pisang">Jenis Pisang</label>
            <input type="text" class="form-control" id="jenis_pisang" value="<?= $riwayat['jenis_pisang']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="kode_kerusakan">Kerusakan</label>
            <input type="text" class="form-control" id="kode_kerusakan" value="<?= $riwayat['kode_kerusakan']; ?>" readonly>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <a href="<?= route_to('riwayat'); ?>" class="btn btn-success">Kembali</a>
    </div>
</div>
<?= $this->endSection() ?>