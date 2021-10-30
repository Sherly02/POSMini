<?php

namespace App\Controllers;

use App\Models\M_Login;
use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        if (!empty($_POST)){
            $this->loginAuth();
        } else {
            echo view('login');
        }
    }

    public function loginAuth()
    {
        $session    = session();
        $loginModel = new M_Login();

        $username   = $this->request->getVar('username');
        $password   = $this->request->getVar('password');
        $data       = $loginModel->where('username', $username)->first();
        if ($data) {
            $pass   = $data['password'];
            if ($password === $pass) {
                $ses_data = [
                    'id' => $data['id'],
                    'username' => $data['username'],
                    'isLoggedIn' => true
                ];

                $session->set($ses_data);
                return redirect()->route('/admin_dashboard');
            } else {
                $session->setFlashdata('msg', 'Password is incorrect!');
                return redirect()->to('/admin_login');
            }
        } else {
            $session->setFlashdata('msg', 'Username does not exist!');
            return redirect()->to('/admin_login');
        }
    }
}