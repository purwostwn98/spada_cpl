<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index(): string
    {
        $data = [
            'halaman' => ['', 'login']
        ];
        return view('auth/index_auth', $data);
    }

    function proses_login()
    {
        $user = $this->request->getPost('uname');
        $pass = $this->request->getPost('kunci');
        if ($user == 'admin') {
            $kode_user = 1;
            $kaprodi = 0;
        } elseif ($user == 'dosen') {
            $kode_user = 8;
            $kaprodi = 0;
        } elseif ($user == 'kaprodi') {
            $kode_user = 8;
            $kaprodi = 1;
        } elseif ($user == 'mahasiswa') {
            $kode_user = 10;
            $kaprodi = 0;
        }
        $data_session = [
            'kode_jabatan' => $kode_user,
            'kaprodi' => $kaprodi
        ];
        $_SESSION['userdata'] =  $data_session;
        if ($_SESSION['userdata']['kode_jabatan'] == 1) {
            return redirect()->to('/');
        } elseif ($_SESSION['userdata']['kode_jabatan'] == 8) {
            return redirect()->to('/dosen/home');
        } elseif ($_SESSION['userdata']['kode_jabatan'] == 10) {
            return redirect()->to('/mhs/home');
        }
    }

    function logout()
    {
        session()->destroy('userdata');
        return redirect()->to('/index_auth');
    }
}
