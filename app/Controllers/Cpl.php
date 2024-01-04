<?php

namespace App\Controllers;

use App\Models\DosenkelasModel;
use App\Models\DosenModel;
use App\Models\KelaskuliahModel;
use App\Models\LembagaModel;
use App\Models\MahasiswaModel;
use App\Models\MatakuliahModel;
use App\Models\PenggunaModel;
use App\Models\PeriodeModel;
use App\Models\PesertakelasModel;

class Cpl extends BaseController
{
    protected $mhsModel;
    protected $penggunaModel;
    protected $lmbgModel;
    protected $dosenModel;
    protected $mkModel;
    protected $periodeModel;
    protected $kelasModel;
    protected $dosenklsModel;
    protected $pesertaklsModel;

    public function __construct()
    {
        $this->mhsModel = new MahasiswaModel();
        $this->penggunaModel = new PenggunaModel();
        $this->lmbgModel = new LembagaModel();
        $this->dosenModel = new DosenModel();
        $this->mkModel = new MatakuliahModel();
        $this->periodeModel = new PeriodeModel();
        $this->kelasModel = new KelaskuliahModel();
        $this->dosenklsModel = new DosenkelasModel();
        $this->pesertaklsModel = new PesertakelasModel();
    }

    public function cpl_mhs(): string
    {
        $data_lembaga = $this->lmbgModel->groupBy('kode_prodi')->groupBy('nama_prodi')->groupBy('id_lembaga')
            ->select('kode_prodi, nama_prodi, id_lembaga')->findAll();

        $data = [
            'halaman' => ['', 'cpl-mhs'],
            'lembaga' => $data_lembaga


        ];

        return view('cpl/cpl_mhs', $data);
    }

    public function cpl_angkatan(): string
    {
        $data_lembaga = $this->lmbgModel->groupBy('kode_prodi')->groupBy('nama_prodi')->groupBy('id_lembaga')
            ->select('kode_prodi, nama_prodi, id_lembaga')->findAll();

        $data = [
            'halaman' => ['', 'cpl-angkatan'],
            'lembaga' => $data_lembaga


        ];

        return view('cpl/cpl_angkatan', $data);
    }

    function cpl_mk(): string
    {
        $data_lembaga = $this->lmbgModel->groupBy('kode_prodi')->groupBy('nama_prodi')->groupBy('id_lembaga')
            ->select('kode_prodi, nama_prodi, id_lembaga')->findAll();
        $list_periode = $this->periodeModel->limit(0, 3)->orderBy('kode_smt', 'DESC')->findAll();

        $data = [
            'halaman' => ['', 'cpl-mk'],
            'lembaga' => $data_lembaga,
            'list_periode' => $list_periode
        ];
        // dd($data_mahasiswa);
        return view('cpl/cpl_mk', $data);
    }

    function atur_mk_pengukur(): string
    {
        $data_lembaga = $this->lmbgModel->groupBy('kode_prodi')->groupBy('nama_prodi')->groupBy('id_lembaga')
            ->select('kode_prodi, nama_prodi, id_lembaga')->findAll();
        $list_periode = $this->periodeModel->limit(0, 3)->orderBy('kode_smt', 'DESC')->findAll();

        $data = [
            'halaman' => ['', 'atur-mk-pengukur'],
            'lembaga' => $data_lembaga,
            'list_periode' => $list_periode
        ];
        // dd($data_mahasiswa);
        return view('cpl/atur_mk_pengukur', $data);
    }

    function cpl_map(): string
    {
        $data_lembaga = $this->lmbgModel->groupBy('kode_prodi')->groupBy('nama_prodi')->groupBy('id_lembaga')
            ->select('kode_prodi, nama_prodi, id_lembaga')->findAll();
        $list_periode = $this->periodeModel->limit(0, 3)->orderBy('kode_smt', 'DESC')->findAll();

        $data = [
            'halaman' => ['', 'cpl-map'],
            'lembaga' => $data_lembaga,
            'list_periode' => $list_periode
        ];
        // dd($data_mahasiswa);
        return view('cpl/cpl_map', $data);
    }
}
