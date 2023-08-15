<?= $this->extend('layouts/app') ?>

<?= $this->section('title') ?>
Hasil Diagnosa
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<style>
    @media print {
      .no-print {
        display: none;
      }
    }
  </style>
<div class="card mb-5">
    <div class="card-header bg-success pt-3 px-4">
        <h4 class="mx-4 responsive-font"><a class="text-white pr-3" href="<?= route_to('diagnosis') ?>"><i class="fa fa-arrow-left fa-sm no-print" aria-hidden="true"></i></a>Hasil Diagnosis</h4>
    </div>
    <div class="card-body">
        <div class="m-2">
            <h4 class="text-center mb-3 responsive-font">Berdasarkan gejala terpilih, berikut hasil analisis penyakit tanaman pisang anda dengan jenis <?= $jenis_pisang ?></h4>
            <hr>
            <div class="d-flex justify-content-between">
                <div class="d-flex mx-4 flex-column">
                    <h3 class="responsive-font"><b>Jenis Penyakit</b></h3>
                    <p class="text-center responsive-font"><small><?= $namaKerusakan ?></small></p>
                </div>
                <div class="d-flex mx-4 flex-column">
                    <h3 class="responsive-font"><b>Tingkat Keyakinan</b></h3>
                    <p class="text-center responsive-font"><small><?= $maxValue ?>%</small></p>
                </div>
            </div>
        </div>
        <!-- <div class="m-2">
            <div class="d-flex text-justify">
                <div class="d-flex mx-4 flex-column">
                    <h3 class="responsive-font"><b>Gejala Penyakit</b></h3>
                    <ol><small>
                        <?php foreach ($gejalas as $gejala) : ?>
                            <li class="responsive-font"><small><?= $gejala['nama_gejala'] ?></small></li>
                        <?php endforeach; ?>
                    </small></ol>
                </div>
            </div>
        </div> -->
        <div class="m-2">
            <div class="d-flex text-justify">
                <div class="d-flex mx-4 flex-column">
                    <h3 class="responsive-font"><b>Penjelasan:</b><small> Berdasarkan Gejala yang Anda sebutkan, seperti <?php foreach ($gejalas as $gejala) : ?>
                            <?= $gejala['nama_gejala'] ?>,
                        <?php endforeach; ?> menunjukkan bahwa masalah terletak pada <?= $namaKerusakan ?> komputer.</small></h3>
                </div>
            </div>
        </div>
        <div class="m-2">
            <div class="d-flex text-justify">
                <div class="d-flex mx-4 flex-column">
                    <h3 class="responsive-font"><b>Solusi:</b></h3>
                    <ul>
                        <?php foreach ($solusis[0] as $solusi) : ?>
                            <li class="responsive-font"><small><?= $solusi['nama_solusi'] ?></small></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center mb-5">
            <button class="btn btn-success no-print" onclick="window.print()">Cetak Hasil</button>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
