<?php

namespace App\Models;

use CodeIgniter\I18n\Time;
use CodeIgniter\Model;

class LoginmoodleModel extends Model
{
    protected $table            = 'cek_untuk_login_moodle';
    protected $primaryKey       = 'token';
    protected $allowedFields    = ['token', 'username', 'password', 'firstname', 'lastname', 'email', 'idnumber', 'status'];


    public function simpan($token, $username, $password, $firstname, $lastname, $email, $idnumber, $status)
    {

        $dt_simpan = [
            'token' => $token,
            'username' => $username,
            'password' => md5($password),
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'idnumber' => $idnumber,
            'status' => $status,
        ];

        $query = $this->insert($dt_simpan);
        return $query;
    }
}
