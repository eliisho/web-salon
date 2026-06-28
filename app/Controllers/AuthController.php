<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\User;
class AuthController extends BaseController
{
    public function login()
    {
        return view('loginpage');
    }
    public function prosesLogin()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        if (empty($username) || empty($password)) {
            return $this->failAndRedirect('Username dan Password harus diisi.');
        }

        $userModel = new User();
        $dataUser = $userModel->where('username', $username)->first();

        if (!$dataUser || !password_verify($password, $dataUser['password'])) {
            return $this->failAndRedirect('Username atau Password salah.');
        }

        $sessionData = [
            'user' => [
                'id' => $dataUser['id'],
                'username' => $dataUser['username'],
                'role' => $dataUser['role'],
                'isLoggedIn' => true
            ]
        ];

        session()->set($sessionData);
        return redirect()->to($dataUser['role'] === 'admin' ? '/dashboard' : '/halamanMember');
    }

    private function failAndRedirect($message)
    {
        session()->setFlashdata('error', $message);
        return redirect()->back()->withInput();
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }

}
