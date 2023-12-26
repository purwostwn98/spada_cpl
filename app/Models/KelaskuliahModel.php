<?php

namespace App\Models;

use CodeIgniter\Model;

class KelaskuliahModel extends Model
{
    protected $table            = 'mstr_kelas_kuliah';
    protected $primaryKey       = 'id_kls';
    protected $allowedFields    = ['id_kls', 'kdsmt_kls', 'kdprodi_kls', 'id_mk', 'nama_kls', 'kls_crat', 'kls_upat'];
    protected $createdField     = 'kls_crat';
    protected $updatedField     = 'kls_upat';
    protected $useTimestamps    = true;

    // public function update_kls($id_kls, $kdsmt_kls, $kdprodi_kls, $kdmk_kls, $nama_kls)
    // {

    //     $idkls = md5($kdsmt_kls . $kdprodi_kls . $kdmk_kls . $nama_kls);
    //     $dt_update = [
    //         'nama_kls' => $nama_kls,
    //     ];
    //     $query = $this->where('id_mk', $id_kls)->set($dt_update)->update();
    //     return $query;
    // }

    public function simpan_kls($id_kls, $kdsmt_kls, $kdprodi_kls, $kdmk_kls, $id_mk, $nama_kls)
    {
        $id_kls = md5($kdsmt_kls . $kdprodi_kls . $kdmk_kls . $nama_kls);
        $dt_simpan = [
            'id_kls' => $id_kls,
            'kdsmt_kls' => $kdsmt_kls,
            'kdprodi_kls' => $kdprodi_kls,
            'id_mk' => $id_mk,
            'nama_kls' => $nama_kls
        ];

        $query = $this->insert($dt_simpan);
        return $query;
    }
}
