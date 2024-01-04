<?php

namespace App\Models;

use CodeIgniter\Model;

class MatakuliahModel extends Model
{
    protected $table            = 'mstr_matkul';
    protected $primaryKey       = 'id_mk';
    protected $allowedFields    = ['id_mk', 'kode_mk', 'idlembaga_mk', 'nama_mk', 'sks_mk', 'tahun_kurikulum', 'semester_mk'];
    protected $createdField     = 'mk_crat';
    protected $updatedField     = 'mk_upat';
    protected $useTimestamps    = true;

    public function update_mk($kode_mk, $idlembaga, $nama_mk, $sks, $semester, $tahun_kurikulum)
    {

        $idmk = md5($kode_mk . $idlembaga . $tahun_kurikulum);
        $dt_update = [
            'nama_mk' => $nama_mk,
            'sks_mk' => $sks,
            'semester_mk' => $semester
        ];
        $query = $this->where('id_mk', $idmk)->set($dt_update)->update();
        return $query;
    }

    public function simpan_mk($kode_mk, $idlembaga, $nama_mk, $sks, $semester, $tahun_kurikulum)
    {
        $id_mk = md5($kode_mk . $idlembaga . $tahun_kurikulum);
        $dt_simpan = [
            'id_mk' => $id_mk,
            'kode_mk' => $kode_mk,
            'idlembaga_mk' => $idlembaga,
            'nama_mk' => $nama_mk,
            'sks_mk' => $sks,
            'semester_mk' => $semester,
            'tahun_kurikulum' => $tahun_kurikulum
        ];

        $query = $this->insert($dt_simpan);
        return $query;
    }
}
