<?php

namespace App\Controllers;

use App\Models\CourseModel;
use App\Models\LembagaModel;
use App\Models\MahasiswaModel;
use App\Models\PenggunaModel;

class Courseadm extends BaseController
{
    protected $mhsModel;
    protected $penggunaModel;
    protected $lmbgModel;
    protected $courseModel;


    public function __construct()
    {
        $this->mhsModel = new MahasiswaModel();
        $this->penggunaModel = new PenggunaModel();
        $this->lmbgModel = new LembagaModel();
        $this->courseModel = new CourseModel();
    }

    public function v_salin_course(): string
    {

        $angkatan_max = $this->mhsModel->selectMax('angkatan')->first();
        if (empty($angkatan_max)) {
            $tahun_max = date('Y');
        } else {
            $tahun_max = $angkatan_max['angkatan'];
        }
        $semua_course = $this->courseModel->limit(0, 4)->findAll();
        $kode_smt = 20201;

        //digunakan untuk rowspan kolom mk
        $count_mk = $this->courseModel->select('id_mk, COUNT(id_mk) as jml_mk, kode_prodi')->groupBy('id_mk, kode_prodi')
            ->where('kode_smt', $kode_smt)
            ->limit(0, 4)
            ->findAll();
        $jml_mk = [];
        foreach ($count_mk as $key => $value) {
            $count_kls_dosen = $this->courseModel->where([
                'kode_smt' => $kode_smt,
                'id_mk' => $value['id_mk']
            ])->select('id_dosen, COUNt(id_dosen) as jml_dosen')->groupBy('id_dosen')->findAll();
            $jml_kls = [];
            foreach ($count_kls_dosen as $k => $dos) {
                $kelas = $this->courseModel->where([
                    'id_dosen' => $dos['id_dosen'],
                    'id_mk' => $value['id_mk'], 'kode_smt' => $kode_smt
                ])->findAll();
                $jml_kls[] = array('nama_dosen' => $dos['id_dosen'], 'jml_kls' => $dos['jml_dosen'], 'kelas' => $kelas);
            }
            $jml_mk[$value['id_mk']] = array('jml_mk' => $value['jml_mk'], 'kode_prodi' => $value['kode_prodi'], 'dosen' => $jml_kls);
        }
        $data_lembaga = $this->lmbgModel->groupBy('kode_prodi')->groupBy('nama_prodi')->select('kode_prodi')->select('nama_prodi')->findAll();
        // dd($jml_mk);
        $data = [
            'halaman' => ['course', 'salin-course'],
            'semua_course' => $semua_course,
            'jml_mk' => $jml_mk,
            'lembaga' => $data_lembaga,
            'tahun_max' => $tahun_max,
        ];
        return view('course/salin_course', $data);
    }

    public function v_buat_course(): string
    {

        $angkatan_max = $this->mhsModel->selectMax('angkatan')->first();
        if (empty($angkatan_max)) {
            $tahun_max = date('Y');
        } else {
            $tahun_max = $angkatan_max['angkatan'];
        }
        $semua_course = $this->courseModel->limit(0, 4)->findAll();
        $kode_smt = 20201;

        //digunakan untuk rowspan kolom mk
        $count_mk = $this->courseModel->select('id_mk, COUNT(id_mk) as jml_mk, kode_prodi')->groupBy('id_mk, kode_prodi')
            ->where('kode_smt', $kode_smt)
            ->limit(0, 4)
            ->findAll();
        $jml_mk = [];
        foreach ($count_mk as $key => $value) {
            $count_kls_dosen = $this->courseModel->where([
                'kode_smt' => $kode_smt,
                'id_mk' => $value['id_mk']
            ])->select('id_dosen, COUNt(id_dosen) as jml_dosen')->groupBy('id_dosen')->findAll();
            $jml_kls = [];
            foreach ($count_kls_dosen as $k => $dos) {
                $kelas = $this->courseModel->where([
                    'id_dosen' => $dos['id_dosen'],
                    'id_mk' => $value['id_mk'], 'kode_smt' => $kode_smt
                ])->findAll();
                $jml_kls[] = array('nama_dosen' => $dos['id_dosen'], 'jml_kls' => $dos['jml_dosen'], 'kelas' => $kelas);
            }
            $jml_mk[$value['id_mk']] = array('jml_mk' => $value['jml_mk'], 'kode_prodi' => $value['kode_prodi'], 'dosen' => $jml_kls);
        }
        $data_lembaga = $this->lmbgModel->groupBy('kode_prodi')->groupBy('nama_prodi')->select('kode_prodi')->select('nama_prodi')->findAll();
        // dd($jml_mk);
        $data = [
            'halaman' => ['course', 'buat-course'],
            'semua_course' => $semua_course,
            'jml_mk' => $jml_mk,
            'lembaga' => $data_lembaga,
            'tahun_max' => $tahun_max,
        ];
        return view('course/buat_course', $data);
    }
}
