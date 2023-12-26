<?php

namespace App\Models;

use CodeIgniter\Model;

class CourseModel extends Model
{
    protected $table            = 'semua_course';
    protected $primaryKey       = 'id_mkkelas';
    protected $allowedFields    = ['id_mkkelas', 'id_mk', 'kode_prodi', 'kode_smt', 'kelas_kuliah', 'id_dosen', 'jml_peserta', 'mkkelas_crat', 'mkkelas_upat'];
    protected $useTimestamps    = true;
    protected $createdField     = 'mkkelas_crat';
    protected $updatedField     = 'mkkelas_upat';
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
