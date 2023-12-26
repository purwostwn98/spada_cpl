<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
    protected $table            = 'pengguna';
    protected $primaryKey       = 'id_pengguna';
    protected $allowedFields    = ['id_pengguna', 'username', 'password', 'nama_pengguna', 'tipe_pengguna', 'email_pengguna', 'kode_prodi', 'createdat_pengguna', 'updatedat_pengguna'];
    protected $createdField     = 'createdat_pengguna';
    protected $updatedField     = 'updatedat_pengguna';
    protected $useTimestamps    = true;

    public function update_pengguna($nim, $email, $nama_pgn)
    {
        $dt_update = [
            'nama_pengguna' => $nama_pgn,
            'email_pengguna' => $email
        ];
        $query = $this->where('id_pengguna', $nim)->set($dt_update)->update();
        return $query;
    }

    public function simpan_pengguna($idpgn, $uname, $pass, $nama_pgn, $tipe, $email, $id_prd)
    {
        $dt_simpan = [
            'id_pengguna' => $idpgn,
            'username' => $uname,
            'password' => $pass,
            'nama_pengguna' => $nama_pgn,
            'tipe_pengguna' => $tipe,
            'email_pengguna' => $email,
            'kode_prodi' => $id_prd
        ];

        $query = $this->insert($dt_simpan);
        return $query;
    }
}
