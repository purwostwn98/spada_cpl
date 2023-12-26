<?php

namespace App\Models;

use CodeIgniter\Model;

class MatakuliahModel extends Model
{
    protected $table            = 'mstr_matkul';
    protected $primaryKey       = 'id_mk';
    protected $allowedFields    = ['id_mk', 'kode_mk', 'kdprodi_mk', 'nama_mk', 'sks_mk'];
    protected $createdField     = 'mk_crat';
    protected $updatedField     = 'mk_upat';
    protected $useTimestamps    = true;

    public function update_mk($kode_mk, $kdprodi, $nama_mk, $sks)
    {

        $idmk = md5($kode_mk . $kdprodi);
        $dt_update = [
            'nama_mk' => $nama_mk,
            'sks_mk' => $sks
        ];
        $query = $this->where('id_mk', $idmk)->set($dt_update)->update();
        return $query;
    }

    public function simpan_mk($kode_mk, $kdprodi, $nama_mk, $sks)
    {
        $id_mk = md5($kode_mk . $kdprodi);
        $dt_simpan = [
            'id_mk' => $id_mk,
            'kode_mk' => $kode_mk,
            'kdprodi_mk' => $kdprodi,
            'nama_mk' => $nama_mk,
            'sks_mk' => $sks
        ];

        $query = $this->insert($dt_simpan);
        return $query;
    }
}
