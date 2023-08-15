<?php

namespace App\Controllers;

use App\Models\RiwayatModel;

class AdminRiwayatController extends BaseController
{
    public function index()
    {
        $riwayatModel = new RiwayatModel();
        $riwayats = $riwayatModel->findAll();
        return view('admin/riwayat/index', ['riwayats' => $riwayats]);
    }

    public function show($id)
    {
        $riwayatModel = new RiwayatModel();
        $riwayat = $riwayatModel->find($id);

        if (!$riwayat) {
            return redirect()->back()->with('error', 'riwayat not found.');
        }

        return view('admin/riwayat/show', compact('riwayat'));
    }

    public function destroy($id)
    {
        $riwayatModel = new RiwayatModel();
        $riwayatModel->delete($id);

        return redirect()->to('/riwayat');
    }
}
