<?= $this->extend('layouts/admin/app') ?>
<?= $this->section('title') ?>
Beranda
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3><?= $kerusakan ?></h3>

        <p>Jenis Penyakit</p>
      </div>
      <div class="icon">
        <i class="fa fa-viruses"></i>
      </div>
      <a href="/kerusakan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3><?= $gejala ?></h3>

        <p>Gejala Penyakit</p>
      </div>
      <div class="icon">
        <i class="fa fa-list-ol"></i>
      </div>
      <a href="/gejala" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3><?= $solusi ?></h3>

        <p>Solusi</p>
      </div>
      <div class="icon">
        <i class="fa fa-list-check"></i>
      </div>
      <a href="/solusi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
      <div class="inner">
        <h3><?= $riwayat ?></h3>

        <p>Riwayat Diagnosa</p>
      </div>
      <div class="icon">
        <i class="fa fa-history"></i>
      </div>
      <a href="/riwayat" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
</div>
<?= $this->endSection() ?>