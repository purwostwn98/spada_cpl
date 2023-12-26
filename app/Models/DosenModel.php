<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $table            = 'mstr_dosen';
    protected $primaryKey       = 'id_dsn';
    protected $allowedFields    = ['id_dsn', 'uid_dsn', 'nidn', 'nama_dsn', 'email_dsn', 'dsn_crat', 'dsn_upat'];
    protected $useTimestamps    = true;
    protected $createdField     = 'dsn_crat';
    protected $updatedField     = 'dsn_upat';

    public function update_dsn($iddsn, $uid, $nidn, $nama_dsn, $email)
    {
        $dt_update = [
            'nidn' => $nidn,
            'uid_dsn' => $uid,
            'nama_dsn' => $nama_dsn,
            'email' => $email,
        ];
        $query = $this->where('id_dsn', $iddsn)->set($dt_update)->update();
        return $query;
    }

    public function simpan_dsn($iddsn, $uid, $nidn, $nama, $email)
    {
        $dt_simpan = [
            'id_dsn' => $iddsn,
            'uid_dsn' => $uid,
            'nidn' => $nidn,
            'nama_dsn' => $nama,
            'email_dsn' => $email
        ];

        $query = $this->insert($dt_simpan);
        return $query;
    }
}
