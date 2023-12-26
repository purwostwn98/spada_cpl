<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table            = 'mstr_mahasiswa';
    protected $primaryKey       = 'nim';
    protected $allowedFields    = ['nim', 'kode_prodi', 'angkatan', 'nama_mhs', 'email', 'last_sync', 'mhs_created_at'];
    protected $useTimestamps    = true;
    protected $createdField     = 'mhs_created_at';
    protected $updatedField     = 'last_sync';

    public function get_semua_mahasiswa()
    {
        $query = $this->join('mstr_lembaga as lmbg', 'mstr_mahasiswa.kode_prodi = lmbg.kode_prodi')->findAll();
        return $query;
    }

    public function get_mahasiswa_angkatan($tahun)
    {
        $query = $this->join('mstr_lembaga as lmbg', 'mstr_mahasiswa.kode_prodi = lmbg.kode_prodi')->where('angkatan', $tahun)->findAll();
        return $query;
    }

    public function update_mhs($nim, $email, $nama_mhs)
    {
        $dt_update = [
            'nama_mhs' => $nama_mhs,
            'email' => $email
        ];
        $query = $this->where('nim', $nim)->set($dt_update)->update();
        return $query;
    }

    public function simpan_mhs($nim, $kode_prodi, $angkatan, $nama_mhs, $email)
    {
        $dt_simpan = [
            'nim' => $nim,
            'kode_prodi' => $kode_prodi,
            'angkatan' => $angkatan,
            'nama_mhs' => $nama_mhs,
            'email' => $email
        ];

        $query = $this->insert($dt_simpan);
        return $query;
    }
}
