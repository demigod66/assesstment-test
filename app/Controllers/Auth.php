<?php

namespace App\Controllers;



class Auth extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }

    public function login()
    {
        if (session('id_user')) {
            return redirect()->to(site_url('/dashboard'));
        }
        return view('auth/login');
    }

    public function loginProses()
    {
        $db = \Config\Database::connect();

        $post = $this->request->getPost();
        $query = $db->table('users')->getWhere(['username' => $post['username']]);
        $user = $query->getRow();
        if ($user) {
            if (password_verify($post['password'], $user->password)) {
                $id_user = ['id_user' => $user->id_user];
                session()->set($id_user);
                return redirect()->to(base_url('/dashboard'));
            } else {
                return redirect()->back()->with('error', 'Wrong password');
            }
        } else {
            return redirect()->back()->with('error', 'Username not found');
        }
    }

    public function logout()
    {
        session()->remove('id_user');
        return redirect()->to(site_url('/login'));
    }
}