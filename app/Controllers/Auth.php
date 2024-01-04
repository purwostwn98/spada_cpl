<?php

namespace App\Controllers;

use App\Models\LoginmoodleModel;
use CodeIgniter\I18n\Time;

class Auth extends BaseController
{
    protected $loginmoodleModel;
    public function __construct()
    {
        $this->loginmoodleModel = new LoginmoodleModel();
    }
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
        $_SESSION['token_kurikulum'] =  get_token_kurikulum()['access'];

        $timeNow = Time::now('Asia/Jakarta', 'en_US');
        $kode_sync = $timeNow->getTimestamp();
        $token = 'admin' . '-' . $kode_sync;
        $this->loginmoodleModel->simpan($token, 'admin', 'purwostwn', 'Admin', 'User', 'purwostwn98@ums.ac.id', 'admin', 0);
        $_SESSION['token_moodle'] =  $token;

        if ($_SESSION['userdata']['kode_jabatan'] == 1) {
            return redirect()->to('/home_adm');
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
