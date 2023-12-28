<?php

namespace App\Models;

use CodeIgniter\Model;

class CplModel extends Model
{
    protected $table            = 'mstr_cpl';
    protected $primaryKey       = 'id_cpl';
    protected $allowedFields    = ['id_cpl', 'nomor_cpl', 'deskripsi_cpl', 'id_lembaga', 'tahun_cpl', 'target', 'batas', 'cpl_crat', 'cpl_upat', 'kode_sync', 'is_active'];
    protected $useTimestamps    = true;
    protected $createdField     = 'cpl_crat';
    protected $updatedField     = 'cpl_upat';

    public function simpan($id_cpl, $nomor_cpl, $deskripsi_cpl, $id_lembaga, $tahun_cpl, $target, $batas, $kode_sync, $is_active)
    {
        $dt = [
            'id_cpl' => $id_cpl,
            'nomor_cpl' => $nomor_cpl,
            'deskripsi_cpl' => $deskripsi_cpl,
            'id_lembaga' => $id_lembaga,
            'tahun_cpl' => $tahun_cpl,
            'target' => $target,
            'batas' => $batas,
            'kode_sync' => $kode_sync,
            'is_active' => $is_active
        ];
        $query = $this->insert($dt);
        return $query;
    }

    public function perbarui($id_cpl, $nomor_cpl, $deskripsi_cpl,  $id_lembaga,  $tahun_cpl, $target, $batas, $kode_sync, $is_active)
    {
        $dt = [
            'nomor_cpl' => $nomor_cpl,
            'deskripsi_cpl' => $deskripsi_cpl,
            'id_lembaga' => $id_lembaga,
            'tahun_cpl' => $tahun_cpl,
            'target' => $target,
            'batas' => $batas,
            'kode_sync' => $kode_sync,
            'is_active' => $is_active,

        ];
        $query = $this->where('id_cpl', $id_cpl)->set($dt)->update();
        return $query;
    }

    function hapus($id_cpl)
    {
        return $this->delete(['id_cpl' => $id_cpl]);
    }
}
