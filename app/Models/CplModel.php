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

class CpmkModel extends Model
{
    protected $table            = 'mstr_cpmk';
    protected $primaryKey       = 'id_cpmk';
    protected $allowedFields    = ['id_cpmk', 'idmk_cpmk', 'nomor_cpmk', 'deskripsi_cpmk', 'bobot_cpmk', 'cpmk_crat', 'cpmk_upat', 'cpmk_kode_sync'];
    protected $useTimestamps    = true;
    protected $createdField     = 'cpmk_crat';
    protected $updatedField     = 'cpmk_upat';

    public function simpan($id_cpmk, $idmk_cpmk, $nomor_cpmk, $deskripsi_cpmk, $bobot_cpmk, $cpmk_kode_sync)
    {
        $dt = [
            'id_cpmk' => $id_cpmk,
            'idmk_cpmk' => $idmk_cpmk,
            'nomor_cpmk' => $nomor_cpmk,
            'deskripsi_cpmk' => $deskripsi_cpmk,
            'bobot_cpmk' => $bobot_cpmk,
            'cpmk_kode_sync' => $cpmk_kode_sync
        ];
        $query = $this->insert($dt);
        return $query;
    }

    public function perbarui($id_cpmk, $idmk_cpmk, $nomor_cpmk, $deskripsi_cpmk, $bobot_cpmk, $cpmk_kode_sync)
    {
        $dt = [
            'nomor_cpmk' => $nomor_cpmk,
            'deskripsi_cpmk' => $deskripsi_cpmk,
            'bobot_cpmk' => $bobot_cpmk,
            'cpmk_kode_sync' => $cpmk_kode_sync
        ];
        $query = $this->where('id_cpmk', $id_cpmk)->set($dt)->update();
        return $query;
    }

    function hapus($id_cpmk)
    {
        return $this->delete(['id_cpmk' => $id_cpmk]);
    }
}

class CpmkcplModel extends Model
{
    protected $table            = 'conn_cpmk_cpl';
    protected $primaryKey       = 'id_cpmk_cpl';
    protected $allowedFields    = ['id_cpmk_cpl', 'id_cpmk', 'id_cpl', 'cpmk_cpl_sync'];

    public function simpan($id_cpmk, $id_cpl, $cpmk_cpl_sync)
    {
        $id_con = md5($id_cpmk . '-' . $id_cpl);
        $dt = [
            'id_cpmk_cpl' => $id_con,
            'id_cpmk' => $id_cpmk,
            'id_cpl' => $id_cpl,
            'cpmk_cpl_sync' => $cpmk_cpl_sync
        ];
        $query = $this->insert($dt);
        return $query;
    }

    public function perbarui($id_cpmk, $id_cpl, $cpmk_cpl_sync)
    {
        $id_con = md5($id_cpmk . '-' . $id_cpl);
        $dt = [
            'cpmk_cpl_sync' => $cpmk_cpl_sync
        ];
        $query = $this->where('id_cpmk_cpl', $id_con)->set($dt)->update();
        return $query;
    }

    function hapus($id_cpmk_cpl)
    {
        return $this->delete(['id_cpmk_cpl' => $id_cpmk_cpl]);
    }
}
