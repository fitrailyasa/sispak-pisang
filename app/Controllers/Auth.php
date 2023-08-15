<?php

namespace App\Controllers;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function __construct()
    {
        helper(['form']);
       
    }

    public function login()
    {
        return view('auth/login');
    }

    public function doLogin()
    {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('username');
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        
        $data = $userModel->where('username', $username)->orWhere('email', $email)->first();

        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $dataUser = [
                    'id' => $data['id'],
                    'username' => $data['username'],
                    'email' => $data['email'],
                    'image' => $data['image'],
                    'role' => $data['role'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($dataUser);
                return redirect()->to('/dashboard');
            
            }else{
                $session->setFlashdata('error', 'Password is incorrect!');
                return redirect()->back()->withInput();
            }
        }else{
            $session->setFlashdata('error', 'Username or Email does not exit!');
            return redirect()->back()->withInput();
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }

}