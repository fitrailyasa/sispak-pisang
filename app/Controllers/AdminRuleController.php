<?php

namespace App\Controllers;

use App\Models\RuleModel;
use App\Models\GejalaModel;
use App\Models\KerusakanModel;

class AdminRuleController extends BaseController
{
    public function index()
    {
        $ruleModel = new RuleModel();
        $rules = $ruleModel->findAll();
        return view('admin/rule/index', ['rules' => $rules]);
    }

    public function create()
    {
        $gejalaModel = new GejalaModel();
        $kerusakanModel = new KerusakanModel();

        return view('admin/rule/create', ['gejalas' => $gejalaModel->findAll(), 'kerusakans' => $kerusakanModel->findAll()]);
    }

    public function store()
    {
        $validationRules = [
            'kode_rule' => 'required',
            'kode_gejala' => 'required',
            'kode_kerusakan' => 'required',
            'bobot_pakar' => 'required',
        ];

        $validationMessages = [
            'kode_rule' => [
                'required' => 'Kode rule harus diisi.'
            ],
            'kode_gejala' => [
                'required' => 'Kode gejala harus diisi.',
            ],
            'kode_kerusakan' => [
                'required' => 'Kode kerusakan harus diisi.',
            ],
            'bobot_pakar' => [
                'required' => 'Bobot pakar harus diisi.',
            ],
        ];

        if (!$this->validate($validationRules, $validationMessages)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $data = [
            'kode_rule' => $this->request->getVar('kode_rule'),
            'kode_gejala' => $this->request->getVar('kode_gejala'),
            'kode_kerusakan' => $this->request->getVar('kode_kerusakan'),
            'bobot_pakar' => $this->request->getVar('bobot_pakar')
        ];

        $ruleModel = new RuleModel();
        $ruleModel->insert($data);

        return redirect()->to('/rule');
    }

    public function show($id)
    {
        $ruleModel = new RuleModel();
        $rule = $ruleModel->find($id);

        if (!$rule) {
            return redirect()->back()->with('error', 'rule not found.');
        }

        return view('admin/rule/show', compact('rule'));
    }

    public function edit($id)
    {

        $ruleModel = new RuleModel();
        $rule = $ruleModel->find($id);
        $gejalaModel = new GejalaModel();
        $kerusakanModel = new KerusakanModel();
        $gejalas = $gejalaModel->findAll();
        $kerusakans = $kerusakanModel->findAll();

        if (!$rule) {
            return redirect()->back()->with('error', 'rule not found.');
        }

        return view('admin/rule/edit', compact('rule', 'gejalas', 'kerusakans'));
    }

    public function update($id)
    {
        $validationRules = [
            'kode_rule' => "required",
            'kode_gejala' => 'required',
            'kode_kerusakan' => 'required',
            'bobot_pakar' => 'required',
        ];

        $validationMessages = [
            'kode_rule' => [
                'required' => 'Kode rule harus diisi.'
            ],
            'kode_gejala' => [
                'required' => 'Kode gejala harus diisi.'
            ],
            'kode_kerusakan' => [
                'required' => 'Kode kerusakan harus diisi.'
            ],
            'bobot_pakar' => [
                'required' => 'Bobot pakar harus diisi.'
            ],
        ];

        $validation = \Config\Services::validation();
        $validation->setRules($validationRules, $validationMessages);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $data = [
            'kode_rule' => $this->request->getPost('kode_rule'),
            'kode_gejala' => $this->request->getPost('kode_gejala'),
            'kode_kerusakan' => $this->request->getPost('kode_kerusakan'),
            'bobot_pakar' => $this->request->getPost('bobot_pakar'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $ruleModel = new RuleModel();
        $rule = $ruleModel->find($id);

        if (!$rule) {
            return redirect()->back()->with('error', 'rule not found.');
        }

        $ruleModel->update($id, $data);

        return redirect()->to('/rule')->with('success', 'rule updated successfully.');
    }


    public function destroy($id)
    {
        $ruleModel = new RuleModel();
        $ruleModel->delete($id);

        return redirect()->to('/rule');
    }
}
