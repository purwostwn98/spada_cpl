<?php

namespace App\Controllers;

use App\Models\CourseModel;
use App\Models\LembagaModel;
use App\Models\MahasiswaModel;
use App\Models\PenggunaModel;

class Dosen extends BaseController
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

    // home
    public function home(): string
    {
        $data = [
            'halaman' => ['', 'home']
        ];
        return view('dosen/home_dosen', $data);
    }

    // home > aktifitas 
    public function v_rekap_nilai_lms($id_mk): string
    {
        $data = [
            'halaman' => ['', 'home']
        ];
        return view('dosen/rekap_nilai_lms', $data);
    }

    public function v_metode_nilai($id_mk): string
    {
        $data = [
            'halaman' => ['', 'home']
        ];
        return view('dosen/metode_nilai', $data);
    }

    public function v_input_nilai($id_mk): string
    {
        $data = [
            'halaman' => ['', 'home']
        ];
        return view('dosen/input_nilai', $data);
    }

    public function v_eval_cpl($id_mk): string
    {
        $data = [
            'halaman' => ['', 'home']
        ];
        return view('dosen/eval_cpl_mk', $data);
    }

    // Salin course
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

    // Buat course digunakan untuk pembuat RPS
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

    // Master mbz
    public function v_master_mbz(): string
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
            'halaman' => ['course', 'master-mbz'],
            'semua_course' => $semua_course,
            'jml_mk' => $jml_mk,
            'lembaga' => $data_lembaga,
            'tahun_max' => $tahun_max,
        ];
        return view('course/master_mbz', $data);
    }
}
