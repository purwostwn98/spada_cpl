<?php

namespace App\Controllers;

use App\Models\CplModel;
use App\Models\DosenkelasModel;
use App\Models\KelaskuliahModel;
use App\Models\LembagaModel;
use App\Models\MahasiswaModel;
use App\Models\MatakuliahModel;
use App\Models\PenggunaModel;
use App\Models\PesertakelasModel;

class Dinamis extends BaseController
{
    protected $mhsModel;
    protected $penggunaModel;
    protected $lmbgModel;
    protected $mkModel;
    protected $kelasModel;
    protected $dosenklsModel;
    protected $pesertaklsModel;
    protected $cplModel;

    public function __construct()
    {
        $this->mhsModel = new MahasiswaModel();
        $this->penggunaModel = new PenggunaModel();
        $this->lmbgModel = new LembagaModel();
        $this->mkModel = new MatakuliahModel();
        $this->kelasModel = new KelaskuliahModel();
        $this->dosenklsModel = new DosenkelasModel();
        $this->pesertaklsModel = new PesertakelasModel();
        $this->cplModel = new CplModel();
    }

    public function load_mstr_mahasiswa()
    {

        if ($this->request->isAJAX()) {
            $tahun_akt = $this->request->getPost('angkatan');
            $prodi = $this->request->getPost('prodi');

            if ($prodi == null) {
                $data_mahasiswa = $this->mhsModel->get_mahasiswa_angkatan($tahun_akt);
            } else {
                $data_mahasiswa = $this->mhsModel->where('angkatan', $tahun_akt)->where('mstr_mahasiswa.kode_prodi', $prodi)
                    ->join('mstr_lembaga as lmbg', 'mstr_mahasiswa.kode_prodi = lmbg.kode_prodi')
                    ->findAll();
            }

            $data_mhs = [];
            foreach ($data_mahasiswa as $ind => $val) {
                $data_mhs[] = array('nim' => $val['nim'], 'nama_mhs' => $val['nama_mhs'], 'angkatan' => $val['angkatan'], 'nama_prodi' => $val['nama_prodi'], 'email' => $val['email'], 'nomor' => $ind + 1);
            }
            $msg['data'] = $data_mhs;
            echo json_encode($msg);
        } else {
            echo ("Maaf perintah anda tidak dapat diproses");
        }
    }

    public function load_mstr_mk()
    {

        if ($this->request->isAJAX()) {
            $prodi = $this->request->getPost('prodi');

            $data_mk = $this->mkModel->where('kdprodi_mk', $prodi)
                ->join('mstr_lembaga as lmbg', 'mstr_matkul.kdprodi_mk = lmbg.kode_prodi')->findAll();

            $ar_mk = [];
            foreach ($data_mk as $ind => $val) {
                $ar_mk[] = array('id_mk' => $val['id_mk'], 'kode_mk' => $val['kode_mk'], 'nama_mk' => $val['nama_mk'], 'nama_prodi' => $val['nama_prodi'], 'sks_mk' => $val['sks_mk'], 'nomor' => $ind + 1);
            }
            $msg['data'] = $ar_mk;
            echo json_encode($msg);
        } else {
            echo ("Maaf perintah anda tidak dapat diproses");
        }
    }

    public function load_mstr_kls()
    {

        if ($this->request->isAJAX()) {
            $periode = $this->request->getPost('periode');
            $prodi = $this->request->getPost('prodi');

            if ($prodi == null) {
                $data_kls = $this->kelasModel->where('kdsmt_kls', $periode)
                    ->join('mstr_matkul as mk', 'mk.id_mk = mstr_kelas_kuliah.id_mk')
                    ->join('mstr_lembaga as lmbg', 'lmbg.kode_prodi = mstr_kelas_kuliah.kdprodi_kls')
                    ->orderBy('kode_mk, nama_kls')
                    ->findAll();
            } else {
                $data_kls = $this->kelasModel->where('kdsmt_kls', $periode)->where('kdprodi_kls', $prodi)
                    ->join('mstr_matkul as mk', 'mk.id_mk = mstr_kelas_kuliah.id_mk')
                    ->join('mstr_lembaga as lmbg', 'lmbg.kode_prodi = mstr_kelas_kuliah.kdprodi_kls')
                    ->orderBy('kode_mk, nama_kls')
                    ->findAll();
            }


            $data_kelas = [];
            foreach ($data_kls as $ind => $val) {
                $idkls = md5($periode . $val['kode_prodi'] . $val['kode_mk'] . $val['nama_kls']);
                $jml_dosen = $this->dosenklsModel->where('id_kls', $idkls)->countAllResults();
                $jml_peserta = $this->pesertaklsModel->where('id_kls', $idkls)->countAllResults();
                $data_kelas[] = array('nama_prodi' => $val['nama_prodi'], 'kode_mk' => $val['kode_mk'], 'nama_mk' => $val['nama_mk'], 'kelas' => $val['nama_kls'], 'dosen' => $jml_dosen, 'krs' => $jml_peserta, 'nomor' => $ind + 1);
            }
            $msg['data'] = $data_kelas;
            echo json_encode($msg);
        } else {
            echo ("Maaf perintah anda tidak dapat diproses");
        }
    }


    public function load_mstr_dsnkls()
    {

        if ($this->request->isAJAX()) {
            $periode = $this->request->getPost('periode');
            $prodi = $this->request->getPost('prodi');

            if ($prodi == null) {
                $data_dsnkls = $this->dosenklsModel->where('kode_smt', $periode)
                    ->join('mstr_matkul as mk', 'mk.id_mk = mstr_dosen_kelas.id_mk')
                    ->join('mstr_kelas_kuliah as kls', 'kls.id_kls = mstr_dosen_kelas.id_kls')
                    ->join('mstr_dosen as dsn', 'dsn.id_dsn = mstr_dosen_kelas.id_dsn')
                    ->join('mstr_lembaga as lmbg', 'lmbg.kode_prodi = mstr_dosen_kelas.kode_prodi')
                    ->orderBy('nama_dsn')
                    ->findAll();
            } else {
                $data_dsnkls = $this->dosenklsModel->where('kode_smt', $periode)->wher('kode_prodi', $prodi)
                    ->join('mstr_matkul as mk', 'mk.id_mk = mstr_dosen_kelas.id_mk')
                    ->join('mstr_kelas_kuliah as kls', 'kls.id_kls = mstr_dosen_kelas.id_kls')
                    ->join('mstr_dosen as dsn', 'dsn.id_dsn = mstr_dosen_kelas.id_dsn')
                    ->join('mstr_lembaga as lmbg', 'lmbg.kode_prodi = mstr_dosen_kelas.kode_prodi')
                    ->orderBy('nama_dsn')
                    ->findAll();
            }


            $data_dsnkelas = [];
            foreach ($data_dsnkls as $ind => $val) {
                $data_dsnkelas[] = array('dosen' => $val['nama_dsn'], 'prodi' => $val['nama_prodi'], 'kode_mk' => $val['kode_mk'], 'nama_mk' => $val['nama_mk'], 'kelas' => $val['nama_kls'], 'nomor' => $ind + 1);
            }
            $msg['data'] = $data_dsnkelas;
            echo json_encode($msg);
        } else {
            echo ("Maaf perintah anda tidak dapat diproses");
        }
    }

    public function load_mstr_pesertakls()
    {

        if ($this->request->isAJAX()) {
            $periode = $this->request->getPost('periode');
            $prodi = $this->request->getPost('prodi');

            if ($prodi == null) {
                $data_dsnkls = $this->pesertaklsModel->where('kode_smt', $periode)
                    ->join('mstr_matkul as mk', 'mk.id_mk = mstr_peserta_kelas.id_mk')
                    ->join('mstr_kelas_kuliah as kls', 'kls.id_kls = mstr_peserta_kelas.id_kls')
                    ->join('mstr_mahasiswa as mhs', 'mhs.nim = mstr_peserta_kelas.nim_peserta')
                    ->join('mstr_lembaga as lmbg', 'lmbg.kode_prodi = mstr_peserta_kelas.kode_prodi')
                    ->orderBy('nim_peserta')
                    ->findAll();
            } else {
                $data_dsnkls = $this->pesertaklsModel->where('kode_smt', $periode)->where('kode_prodi', $prodi)
                    ->join('mstr_matkul as mk', 'mk.id_mk = mstr_peserta_kelas.id_mk')
                    ->join('mstr_kelas_kuliah as kls', 'kls.id_kls = mstr_peserta_kelas.id_kls')
                    ->join('mstr_mahasiswa as mhs', 'mhs.nim = mstr_peserta_kelas.nim_peserta')
                    ->join('mstr_lembaga as lmbg', 'lmbg.kode_prodi = mstr_peserta_kelas.kode_prodi')
                    ->orderBy('nim_peserta')
                    ->findAll();
            }


            $data_dsnkelas = [];
            foreach ($data_dsnkls as $ind => $val) {
                $data_dsnkelas[] = array('nama_mhs' => $val['nim'] . ' - ' . $val['nama_mhs'], 'prodi' => $val['nama_prodi'], 'kode_mk' => $val['kode_mk'], 'nama_mk' => $val['nama_mk'], 'kelas' => $val['nama_kls'], 'nomor' => $ind + 1);
            }
            $msg['data'] = $data_dsnkelas;
            echo json_encode($msg);
        } else {
            echo ("Maaf perintah anda tidak dapat diproses");
        }
    }

    //Cpl
    public function load_mstr_cpl()
    {

        if ($this->request->isAJAX()) {
            $tahun = $this->request->getPost('tahun');
            $id_lembaga = $this->request->getPost('prodi');

            if ($tahun == null) {
                $data = $this->cplModel->where('id_cpl', 0)->findAll();
            } else {
                $data = $this->cplModel->where('id_lembaga', $id_lembaga)->where('tahun_cpl', $tahun)->findAll();
            }

            $data_tampil = [];
            foreach ($data as $ind => $val) {
                $data_tampil[] = array('nomor_cpl' => $val['nomor_cpl'], 'deskripsi' => $val['deskripsi_cpl'], 'tahun' => $val['tahun_cpl'], 'status' => $val['is_active'], 'id_cpl' => $val['id_cpl'], 'nomor' => $ind + 1);
            }

            $msg['data'] = $data_tampil;
            echo json_encode($msg);
        } else {
            echo ("Maaf perintah anda tidak dapat diproses");
        }
    }

    function load_modal_cpmk()
    {

        if ($this->request->isAJAX()) {
            $idmk = $this->request->getPost('id_mk');
            $row_mk = $this->mkModel->where('id_mk', $idmk)->first();
            $data = [
                'mk' => $row_mk,
            ];
            $msg = [
                'data' => view('dinamis/modal_cpmk', $data)
            ];
            echo json_encode($msg);
        } else {
            exit("Maaf tidak dapat diproses");
        }
    }

    function load_modal_cpl()
    {

        if ($this->request->isAJAX()) {
            $id_cpl = $this->request->getPost('id_cpl');
            $row = $this->cplModel->where('id_cpl', $id_cpl)->first();
            $data = [
                'cpl' => $row,
                'id_cpl' => $id_cpl
            ];
            $msg = [
                'data' => view('dinamis/modal_edit_cpl', $data)
            ];
            echo json_encode($msg);
        } else {
            exit("Maaf tidak dapat diproses");
        }
    }
}
