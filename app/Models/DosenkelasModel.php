<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenkelasModel extends Model
{
    protected $table            = 'mstr_dosen_kelas';
    protected $primaryKey       = 'id_dsnkls';
    protected $allowedFields    = ['id_dsnkls', 'id_dsn', 'kode_smt', 'kode_prodi', 'id_mk', 'id_kls', 'dsnkls_crat', 'dsnkls_upat'];
    protected $createdField     = 'dsnkls_crat';
    protected $updatedField     = 'dsnkls_upat';
    protected $useTimestamps    = true;


    public function simpan($id_dsnkls, $id_dsn, $kode_smt, $kode_prodi, $kode_mk, $id_mk, $nama_kls, $id_kls)
    {
        $id_dsnkls = md5($kode_smt . $kode_prodi . $kode_mk . $nama_kls . $id_dsn);
        $dt_simpan = [
            'id_dsnkls' => $id_dsnkls,
            'id_dsn' => $id_dsn,
            'kode_smt' => $kode_smt,
            'kode_prodi' => $kode_prodi,
            'id_mk' => $id_mk,
            'id_kls' => $id_kls
        ];

        $query = $this->insert($dt_simpan);
        return $query;
    }
}
