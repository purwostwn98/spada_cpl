<?php

namespace App\Models;

use CodeIgniter\Model;

class PesertakelasModel extends Model
{
    protected $table            = 'mstr_peserta_kelas';
    protected $primaryKey       = 'id_peserta_kls';
    protected $allowedFields    = ['id_peserta_kls', 'kode_smt', 'kode_prodi', 'id_kls', 'id_mk', 'nim_peserta', 'psrtakls_crat', 'psrtakls_upat'];
    protected $useTimestamps    = true;
    protected $createdField     = 'psrtakls_crat';
    protected $updatedField     = 'psrtakls_upat';


    public function simpan($kode_smt, $kode_prodi, $id_kls, $nama_kls, $id_mk, $kode_mk, $nim_peserta)
    {
        $dt_simpan = [
            'id_peserta_kls' => md5($kode_smt . $kode_mk . $nama_kls . $nim_peserta),
            'kode_smt' => $kode_smt,
            'kode_prodi' => $kode_prodi,
            'id_kls' => $id_kls,
            'id_mk' => $id_mk,
            'nim_peserta' => $nim_peserta
        ];

        $query = $this->insert($dt_simpan);
        return $query;
    }
}
