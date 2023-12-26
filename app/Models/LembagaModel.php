<?php

namespace App\Models;

use CodeIgniter\Model;

class LembagaModel extends Model
{
    protected $table            = 'mstr_lembaga';
    protected $primaryKey       = 'fid';
    protected $allowedFields    = ['id_lembaga', 'fid', 'nama_prodi', 'kode_prodi', 'id_fakultas', 'nama_fakultas'];

    // public function update_mhs($nim, $email, $nama_mhs)
    // {
    //     $dt_update = [
    //         'nama_mhs' => $nama_mhs,
    //         'email' => $email
    //     ];
    //     $query = $this->where('nim', $nim)->set($dt_update)->update();
    //     return $query;
    // }

}
