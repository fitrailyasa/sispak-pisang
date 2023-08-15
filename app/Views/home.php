<?= $this->extend('layouts/app') ?>
<?= $this->section('title') ?>
Beranda
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card text-center mt-3 p-3">
    <img src="<?= base_url('assets/img/pohon-pisang.png') ?>" width="100" alt="" style="display: block; margin: 0 auto;">
    <h3><b>Selamat Datang di Sistem Pakar Diagnosa Penyakit Tanaman Pisang</b></h3>
    <h5>Solusi cepat mengetahui Penyakit Tanaman Pisang anda!</h5>
</div>
<div class="px-4 d-none d-md-block">
    <h4>Cara Penggunaan</h4>
</div>
<div class="card p-3 d-none d-md-block">
    <ol>
        <li>
            Anda akan diberikan sejumlah pertanyaan dengan berbagai macam gejala Penyakit Tanaman Pisang.
        </li>
        <li>
            Pada setiap pertanyaan akan ada nama gejala dan pilihan intensitas gejala Penyakit itu muncul diantaranya a. tidak ada, b. sedikit, c. cukup banyak, d. banyak, e. sangat banyak.
        </li>
        <li>
            Setelah mengisi semua pertanyaan harap periksa kembali jawaban anda sesuai dengan gejala Penyakit yang dialami tanaman pisang anda dan tekan tombol submit.
        </li>
        <li>
            Hasil diagnosis akan muncul dengan memberikan informasi seperti nama Penyakit, gejala dari Penyakit, persentase keyakinan terhadap Penyakit, dan solusi yang bisa dilakukan oleh anda dirumah sebelum menemui teknisi tanaman pisang.
        </li>
    </ol>
</div>
<div class="text-center mb-5 pb-5">
    <a class="btn btn-success" href="/diagnosis">Mulai</a>
</div>
<?= $this->endSection() ?>