<?php

namespace App\Controllers;

use App\Models\SolusiModel;
use App\Models\KerusakanModel;

class AdminSolusiController extends BaseController
{
    public function index()
    {
        $solusiModel = new SolusiModel();
        $solusis = $solusiModel->findAll();
        return view('admin/solusi/index', ['solusis' => $solusis]);
    }

    public function create()
    {
        $kerusakanModel = new KerusakanModel();
        $kerusakans = $kerusakanModel->findAll();
        return view('admin/solusi/create', ['kerusakans' => $kerusakans]);
    }

    public function store()
    {
        $validationRules = [
            'kode_kerusakan' => 'required',
            'nama_solusi' => 'required'
        ];

        $validationMessages = [
            'kode_kerusakan' => [
                'required' => 'ID kerusakan harus diisi.',
            ],
            'nama_solusi' => [
                'required' => 'Nama solusi harus diisi.'
            ]
        ];

        if (!$this->validate($validationRules, $validationMessages)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $data = [
            'kode_kerusakan' => $this->request->getVar('kode_kerusakan'),
            'nama_solusi' => $this->request->getVar('nama_solusi'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        $solusiModel = new SolusiModel();
        $solusiModel->insert($data);

        return redirect()->to('/solusi');
    }

    public function show($id)
    {
        $solusiModel = new SolusiModel();
        $solusi = $solusiModel->find($id);

        if (!$solusi) {
            return redirect()->back()->with('error', 'solusi not found.');
        }

        return view('admin/solusi/show', compact('solusi'));
    }

    public function edit($id)
    {
        $solusiModel = new SolusiModel();
        $solusi = $solusiModel->find($id);
        $kerusakanModel = new KerusakanModel();
        $kerusakans = $kerusakanModel->findAll();

        if (!$solusi) {
            return redirect()->back()->with('error', 'solusi not found.');
        }

        return view('admin/solusi/edit', compact('solusi', 'kerusakans'));
    }

    public function update($id)
    {
        $validationRules = [
            'kode_kerusakan' => "required",
            'nama_solusi' => 'required'
        ];

        $validationMessages = [
            'kode_kerusakan' => [
                'required' => 'ID kerusakan harus diisi.'
            ],
            'nama_solusi' => [
                'required' => 'Nama solusi harus diisi.'
            ]
        ];

        $validation = \Config\Services::validation();
        $validation->setRules($validationRules, $validationMessages);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $data = [
            'kode_kerusakan' => $this->request->getVar('kode_kerusakan'),
            'nama_solusi' => $this->request->getVar('nama_solusi'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $solusiModel = new SolusiModel();
        $solusi = $solusiModel->find($id);

        if (!$solusi) {
            return redirect()->back()->with('error', 'Solusi not found.');
        }

        $solusiModel->update($id, $data);

        return redirect()->to('/solusi')->with('success', 'Solusi updated successfully.');
    }


    public function destroy($id)
    {
        $solusiModel = new SolusiModel();
        $solusiModel->delete($id);

        return redirect()->to('/solusi');
    }
}
