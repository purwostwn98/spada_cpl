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

class Kaprodi extends BaseController
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

    public function monitor_mk_pengukur(): string
    {
        $data_lembaga = $this->lmbgModel->groupBy('kode_prodi')->groupBy('nama_prodi')->groupBy('id_lembaga')
            ->select('kode_prodi, nama_prodi, id_lembaga')->findAll();

        $data = [
            'halaman' => ['', 'monitor-mk-pengukur'],
            'lembaga' => $data_lembaga


        ];

        return view('kaprodi/monitor_mk_pengukur', $data);
    }

    function v_cpl_prodi(): string
    {
        $data_lembaga = $this->lmbgModel->groupBy('kode_prodi')->groupBy('nama_prodi')->groupBy('id_lembaga')
            ->select('kode_prodi, nama_prodi, id_lembaga')->findAll();

        $data = [
            'halaman' => ['', 'cpl-prodi'],
            'lembaga' => $data_lembaga
        ];

        return view('cpl/cpl_prodi', $data);
    }
}
