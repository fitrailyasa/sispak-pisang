<?php

namespace App\Controllers;

class AdminDashboardController extends BaseController
{
    public function index()
    {
        $kerusakanModel = new \App\Models\KerusakanModel();
        $gejalaModel = new \App\Models\GejalaModel();
        $solusiModel = new \App\Models\SolusiModel();
        $riwayatModel = new \App\Models\RiwayatModel();
        return view('admin/dashboard', [
            'kerusakan' => $kerusakanModel->countAll(),
            'gejala' => $gejalaModel->countAll(),
            'solusi' => $solusiModel->countAll(),
            'riwayat' => $riwayatModel->countAll()
        ]);
    }
}
