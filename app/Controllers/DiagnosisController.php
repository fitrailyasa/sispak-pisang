<?php

namespace App\Controllers;

use App\Models\GejalaModel;
use App\Models\KerusakanModel;
use App\Models\RuleModel;
use App\Models\SolusiModel;
use App\Models\RiwayatModel;
use App\Models\CFPenggunaModel;
use App\Models\CFPakarModel;

class DiagnosisController extends BaseController
{
    public function index()
    {
        // Gejala
        $gejalaModel = new GejalaModel();
        $gejalas = $gejalaModel->findAll();

        // CF Pengguna
        $cfPenggunaModel = new CFPenggunaModel();
        $cfPenggunas = $cfPenggunaModel->findAll();

        return view('diagnosis', ['gejalas' => $gejalas, 'cfPenggunas' => $cfPenggunas]);
    }

    public function hasil()
    {
        // Gejala
        $gejalaModel = new GejalaModel();

        // CF Pengguna
        $cfPenggunaModel = new CFPenggunaModel();

        // Kerusakan
        $kerusakanModel = new KerusakanModel();

        // Rule
        $ruleModel = new RuleModel();

        $jumlahInput = $gejalaModel->countAll(); // Total gejala
        $cfPenggunas = []; // Inisialisasi array untuk menyimpan data CF pengguna
        $gejalas = []; // Inisialisasi array untuk menyimpan data gejala

        for ($i = 1; $i <= $jumlahInput; $i++) {
            // Menggunakan nomor iterasi sebagai bagian dari nama field input untuk membedakan inputan
            $kodeGejala = $this->request->getPost('kode_gejala_' . $i);
            $bobotPengguna = $this->request->getPost('bobot_pengguna_' . $i);
            if ($bobotPengguna > 0) {
                $gejala = $gejalaModel->find($kodeGejala); // Mengambil data gejala berdasarkan kode gejala

                // Menambahkan data CF pengguna ke dalam array
                $cfPenggunas[] = [
                    'kode_gejala' => $kodeGejala,
                    'bobot_pengguna' => $bobotPengguna,
                ];
                $gejalas[] = $gejala; // Menyimpan data gejala dalam array
            }
        }

        // Proses Perhitungan Metode Naïve Bayes
        // 1) Menentukan nilai N, 𝑚, 𝑥, 𝑛𝑐 setiap class dan 𝑃(𝑣𝑗)

        $N = 1;
        $m = $gejalaModel->countAll(); // Total gejala
        $x = $kerusakanModel->countAll(); // Total kerusakan
        $nc = $cfPenggunas; // Total gejala yang dipilih

        $probabilitas = 1/$x;
        $prob_bulat = round($probabilitas, 3);

        // 2) Menghitung nilai 𝑃(𝑎𝑖|𝑣𝑗)

        $prob_tiap_gejala = []; // Inisialisasi variabel sebagai array kosong

        $i = 0;
        $persentase = [];

        foreach ($nc as $cf_pengguna) {
            $kodeGejala = $cf_pengguna['kode_gejala'];
            $bobotPengguna = $cf_pengguna['bobot_pengguna'];
            $bobotPakar = $ruleModel->where('kode_gejala', $kodeGejala)->first()['bobot_pakar'];

            $prob_tiap_gejala[] = ($cf_pengguna['bobot_pengguna'] + $m * $probabilitas) / ($N + $m);

            $cf_gejala[] = $bobotPengguna * $bobotPakar;

            // 3) Menghitung 𝑃(𝑎𝑖|𝑣𝑗) 𝑥 𝑃(𝑣𝑗) untuk tiap 𝑣.

            $prob_jenis_kerusakan[] = $prob_tiap_gejala[$i] * $prob_bulat;

            $cf_combine = $cf_gejala[$i] + $cf_gejala[$i] * (1 - $cf_gejala[$i]);
            $persentase[] = $cf_combine * 100; // contoh 0.925 * 100 = 92.5%
            $i++;
        }

        if (array_sum($persentase) > 0) {
            $maxPersentase = max($persentase);
            $maxValueIndex = array_keys($prob_jenis_kerusakan, max($prob_jenis_kerusakan));
        } else {
            $maxPersentase = 0;
        }
        $maxValueIndex = $maxValueIndex[0];



        // Rule
        $rules = [];
        if (isset($cfPenggunas[$maxValueIndex])) {
            $kodeGejala = $cfPenggunas[$maxValueIndex]['kode_gejala'];
            $rule = $ruleModel->where('kode_gejala', $kodeGejala)->findAll();
            $rules = array_merge($rules, $rule);
        }

        // Kerusakan
        $kerusakan = $kerusakanModel->find($rules[0]['kode_kerusakan'])['nama_kerusakan'];

        // Solusi
        $solusiModel = new SolusiModel();
        $solusis = [];
        foreach ($rules as $rule) {
            $solusi = $solusiModel->where('kode_kerusakan', $rule['kode_kerusakan'])->findAll();
            if ($solusi) {
                $solusis[] = $solusi;
            }
        }

        // Riwayat
        $validationRules = [
            'jenis_pisang' => 'required'
        ];

        $validationMessages = [
            'jenis_pisang' => [
                'required' => 'jenis pisang harus diisi.',
            ]
            ];

            // Mengambil data kerusakan berdasarkan kode kerusakan
            if(isset($rule['kode_kerusakan']) == null) {
                return redirect()->back();
            } else {
                $namaKerusakan = $kerusakan;
            }

            if (!$this->validate($validationRules, $validationMessages)) {
                return redirect()->back()->withInput()->with('validation', $this->validator);
            }

            $data = [
                'token' => $rule['kode_kerusakan'] . date('YmdHis'),
                'kode_kerusakan' => $namaKerusakan,
                'jenis_pisang' => $this->request->getPost('jenis_pisang'),
                'created_at' => date('Y-m-d H:i:s')
            ];

        $riwayatModel = new RiwayatModel();
        $riwayatModel->insert($data);

        $jenis_pisang = $this->request->getPost('jenis_pisang');


        return view('hasil', ['gejalas' => $gejalas, 'solusis' => $solusis, 'jenis_pisang' => $jenis_pisang, 'namaKerusakan' => $namaKerusakan, 'maxValue' => $maxPersentase]);
    }
}