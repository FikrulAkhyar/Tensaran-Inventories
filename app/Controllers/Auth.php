<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\API\ResponseTrait;

class Auth extends BaseController
{
    use ResponseTrait;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $method = $this->request->getServer('REQUEST_METHOD');

        if ($method === 'GET') {
            return view('auth/login');
        } else if ($method === 'POST') {
            return $this->doLogin();
        }
    }

    private function doLogin()
    {
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password')
        ];

        $user = $this->userModel->where('username', $data['username'])->first();

        if ($user) {
            if ($data['password'] == $user['password']) {

                $sessionData = [
                    'id_user' => $user['id_user'],
                    'username' => $user['username'],
                    'role' => $user['role'],
                ];

                // set session data
                $this->session->set($sessionData);
                return redirect()->to('/dashboard');
            } else {
                return redirect()->to('/login');
            }
        } else {
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/login');
    }
}
