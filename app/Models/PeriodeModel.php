<?php

namespace App\Models;

use CodeIgniter\Model;

class PeriodeModel extends Model
{
    protected $table            = 'mstr_periode';
    protected $primaryKey       = 'kode_smt';
    protected $allowedFields    = ['kode_smt', 'label_smt', 'smt_crat', 'smt_upat'];
    protected $createdField     = 'smt_crat';
    protected $updatedField     = 'smt_upat';
    protected $useTimestamps    = true;

    public function update_smt($kode_smt, $label_smt)
    {
        $dt_update = [
            'label_smt' => $label_smt,
        ];
        $query = $this->where('kode_smt', $kode_smt)->set($dt_update)->update();
        return $query;
    }

    public function simpan_smt($kode_smt, $label_smt)
    {
        $dt_simpan = [
            'kode_smt' => $kode_smt,
            'label_smt' => $label_smt,
        ];

        $query = $this->insert($dt_simpan);
        return $query;
    }
}
