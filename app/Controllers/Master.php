<?php

namespace App\Controllers;

use App\Models\CplModel;
use App\Models\DosenkelasModel;
use App\Models\DosenModel;
use App\Models\KelaskuliahModel;
use App\Models\LembagaModel;
use App\Models\MahasiswaModel;
use App\Models\MatakuliahModel;
use App\Models\PenggunaModel;
use App\Models\PeriodeModel;
use App\Models\PesertakelasModel;
use CodeIgniter\I18n\Time;

class Master extends BaseController
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
    protected $cplModel;

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
        $this->cplModel = new CplModel();
    }

    public function v_mahasiswa(): string
    {

        $angkatan_max = $this->mhsModel->selectMax('angkatan')->first();
        if (empty($angkatan_max)) {
            $tahun_max = date('Y');
        } else {
            $tahun_max = $angkatan_max['angkatan'];
        }
        $data_mahasiswa = $this->mhsModel->get_mahasiswa_angkatan($tahun_max);
        $data_lembaga = $this->lmbgModel->groupBy('kode_prodi')->groupBy('nama_prodi')->select('kode_prodi')->select('nama_prodi')->findAll();

        $data = [
            'halaman' => ['master-akademik', 'master-mhs'],
            'mahasiswa' => $data_mahasiswa,
            'lembaga' => $data_lembaga,
            'tahun_max' => $tahun_max,


        ];

        return view('master/mahasiswa', $data);
    }

    function v_dosen(): string
    {

        $data_dosen = $this->dosenModel->findAll();

        $data = [
            'halaman' => ['master-akademik', 'master-dsn'],
            'dosen' => $data_dosen,
        ];
        // dd($data_mahasiswa);
        return view('master/dosen', $data);
    }

    function v_mk(): string
    {
        $data_lembaga = $this->lmbgModel->groupBy('kode_prodi')->groupBy('nama_prodi')->select('kode_prodi')->select('nama_prodi')->findAll();

        $data = [
            'halaman' => ['master-akademik', 'master-mk'],
            'lembaga' => $data_lembaga
        ];
        // dd($data_mahasiswa);
        return view('master/mk', $data);
    }

    function v_kelas_kuliah(): string
    {
        $data_lembaga = $this->lmbgModel->groupBy('kode_prodi')->groupBy('nama_prodi')->select('kode_prodi')->select('nama_prodi')->findAll();
        $list_periode = $this->periodeModel->limit(0, 3)->orderBy('kode_smt', 'DESC')->findAll();
        $data = [
            'halaman' => ['master-akademik', 'master-kls'],
            'lembaga' => $data_lembaga,
            'list_periode' => $list_periode
        ];
        // dd($data_mahasiswa);
        return view('master/kelas', $data);
    }


    function v_dosen_kelas(): string
    {
        $data_lembaga = $this->lmbgModel->groupBy('kode_prodi')->groupBy('nama_prodi')->select('kode_prodi')->select('nama_prodi')->findAll();
        $list_periode = $this->periodeModel->limit(0, 3)->orderBy('kode_smt', 'DESC')->findAll();
        $data = [
            'halaman' => ['master-akademik', 'master-dsnkls'],
            'lembaga' => $data_lembaga,
            'list_periode' => $list_periode
        ];
        // dd($data_mahasiswa);
        return view('master/dosen_kelas', $data);
    }

    function v_krs(): string
    {

        $data_lembaga = $this->lmbgModel->groupBy('kode_prodi')->groupBy('nama_prodi')->select('kode_prodi')->select('nama_prodi')->findAll();
        $list_periode = $this->periodeModel->limit(0, 3)->orderBy('kode_smt', 'DESC')->findAll();
        $data = [
            'halaman' => ['master-akademik', 'master-krs'],
            'lembaga' => $data_lembaga,
            'list_periode' => $list_periode
        ];
        // dd($data_mahasiswa);
        return view('master/krs', $data);
    }


    public function do_import_mhs()
    {
        if ($this->request->isAJAX()) {
            $angkatan = $this->request->getPost('angkatan');
            $prodi = $this->request->getPost('prodi');
            $lembaga = $this->lmbgModel->where('kode_prodi', $prodi)->first();
            $mahasiswa_angkatan = get_mhs_angkatan($prodi, $angkatan);
            if (!$mahasiswa_angkatan) {
                $mahasiswa_angkatan = [];
            }

            $data_tersimpan = $this->mhsModel->where('kode_prodi', $prodi)->where('angkatan', $angkatan)->findAll();
            $mhs = [];
            foreach ($data_tersimpan as $i => $val) {
                $nim = strtolower($val['nim']);
                $mhs[$nim] = $val;
            }

            $jml_simpan = 0;
            if ($mahasiswa_angkatan['success'] == 'true') {
                foreach ($mahasiswa_angkatan['rows'] as $key => $val) {
                    $nim = strtolower($val['nim']);
                    // Untuk cek apakah mahasiswa sudah didlm tabel spada?
                    if (!empty($mhs[$nim])) {
                        $this->mhsModel->update_mhs($nim, $val['email'], $val['nama']);
                        $this->penggunaModel->update_pengguna($nim, $val['email'], $val['nama']);
                    } else {
                        $jml_simpan++;
                        $this->mhsModel->simpan_mhs($nim, $val['kode_prodi'], $val['angkatan'], $val['nama'], $val['email']);
                        $this->penggunaModel->simpan_pengguna($nim, $nim, "", $val['nama'], 'MAHASISWA', $val['email'], $val['kode_prodi']);
                    }
                }
            } else {
                $jml_simpan = 0;
            }

            $msg = [
                'berhasil' => [
                    'jumlah' => $jml_simpan,
                    'kode_prodi' => $prodi,
                    'angkatan' => $angkatan,
                    'nama_prodi' => $lembaga['nama_prodi']
                ],
                'token' => csrf_hash()
            ];
            echo json_encode($msg);
        } else {
            exit('Mohon maaf, tidak dapat diproses');
        }
    }

    public function do_import_dosen()
    {
        if ($this->request->isAJAX()) {

            $all_dosen = get_all_dosen();

            $data_tersimpan = $this->dosenModel->findAll();
            $dsn = [];
            foreach ($data_tersimpan as $i => $val) {
                $iddsn = strtolower($val['id_dsn']);
                $dsn[$iddsn] = $val;
            }

            $jml_simpan = 0;
            $html_tabel = "";
            if ($all_dosen['success'] == 'true') {
                foreach ($all_dosen['rows'] as $key => $val) {
                    $iddsn = strtolower($val['iddsn']);
                    $uid = pisah_email($val['email'])[0];
                    if ($iddsn != "") {
                        // Untuk cek apakah dosen sudah didlm tabel spada?
                        if (!empty($dsn[$iddsn])) {
                            $this->dosenModel->update_dsn($iddsn, $uid, $val['nidn'],   $val['nama'], $val['email']);
                            $this->penggunaModel->update_pengguna($uid, $val['email'], $val['nama']);
                        } else {
                            //cek uid biar tidak double (ada yang double soalnya)
                            $cek_uid = $this->dosenModel->where('email_dsn', $val['email'])->first();
                            if (empty($cek_uid)) {
                                $jml_simpan++;
                                $this->dosenModel->simpan_dsn($iddsn, $uid, $val['nidn'], $val['nama'], $val['email']);
                                $this->penggunaModel->simpan_pengguna($uid, $uid, "", $val['nama'], "DOSEN", $val['email'], "dosen");
                                $html_tabel .= '<tr><td>' . $val['nama'] . '</td><td>' . $val['iddsn'] . '</td><td>' . $val['nidn'] . '</td><td>' . $val['email'] . '</td></tr>';
                            }
                        }
                    }
                }
            } else {
                $jml_simpan = 0;
            }

            if ($jml_simpan == 0) {
                $html_tabel = '<tr><td>' . 'tidak ada data baru' . '</td><td>-</td><td>-</td><td>-</td></tr>';
            }

            $msg = [
                'berhasil' => [
                    'jumlah' => $jml_simpan,
                    'html_tabel' => $html_tabel
                ],
                'token' => csrf_hash()
            ];
            echo json_encode($msg);
        } else {
            exit('Mohon maaf, tidak dapat diproses');
        }
    }

    public function do_import_mk()
    {
        if ($this->request->isAJAX()) {
            $prodi = $this->request->getPost('prodi');
            $lembaga = $this->lmbgModel->where('kode_prodi', $prodi)->first();
            $mk_prodi = get_mk_prodi($prodi);

            if ($mk_prodi['success'] == 'false') {
                $mk_prodi = [];
            }

            $data_tersimpan = $this->mkModel->where(['kdprodi_mk' => $prodi])->findAll();
            $mk = [];
            foreach ($data_tersimpan as $i => $val) {
                $idmk = md5($val['kode_mk'] . $val['kdprodi_mk']);
                $mk[$idmk] = $val;
            }

            $jml_simpan = 0;
            if ($mk_prodi['success'] == 'true') {
                foreach ($mk_prodi['rows'] as $key => $val) {
                    $idmk = md5($val['kode_mk'] . $val['kode_prodi']);;
                    // Untuk cek apakah mk sudah didlm tabel spada?
                    if (!empty($mk[$idmk])) {
                        $this->mkModel->update_mk($val['kode_mk'], $val['kode_prodi'], $val['nama_mk'], $val['sks_mk']);
                    } else {
                        $cek_double = $this->mkModel->where('id_mk', $idmk)->countAllResults();
                        if ($cek_double == 0) {
                            $jml_simpan++;
                            $this->mkModel->simpan_mk($val['kode_mk'], $val['kode_prodi'], $val['nama_mk'], $val['sks_mk']);
                        } else {
                            continue;
                        }
                    }
                }
            } else {
                $jml_simpan = 0;
            }

            $msg = [
                'berhasil' => [
                    'jumlah' => $jml_simpan,
                    'kode_prodi' => $prodi,
                    'nama_prodi' => $lembaga['nama_prodi']
                ],
                'token' => csrf_hash()
            ];
            echo json_encode($msg);
        } else {
            exit('Mohon maaf, tidak dapat diproses');
        }
    }

    public function do_import_kls()
    {
        if ($this->request->isAJAX()) {
            $periode = $this->request->getPost('periode');
            $prodi = $this->request->getPost('prodi');
            $lembaga = $this->lmbgModel->where('kode_prodi', $prodi)->first();
            $kelas_kuliah = get_kelas_kuliah($periode, $prodi);
            if (!$kelas_kuliah) {
                $kelas_kuliah = [];
            }


            $data_tersimpan = $this->kelasModel->where('kdprodi_kls', $prodi)->where('kdsmt_kls', $periode)
                ->join('mstr_matkul as mk', 'mk.id_mk = mstr_kelas_kuliah.id_mk')
                ->findAll();
            $kelas = [];
            foreach ($data_tersimpan as $i => $val) {
                // $idkls = md5($val['kdsmt_kls'] . $val['kdprodi_kls'] . $val['kode_mk'] . $val['nama_kls']);
                $kelas[$val['id_kls']] = $val;
            }

            // list_mk
            $list_mk = [];
            $data_mk = $this->mkModel->where('kdprodi_mk', $prodi)->findAll();
            foreach ($data_mk as $key => $v) {
                $list_mk[$v['id_mk']] = $v;
            }



            $jml_simpan = 0;
            if ($kelas_kuliah['success'] == 'true') {
                foreach ($kelas_kuliah['rows'] as $key => $val) {
                    $idkls = md5($val['periode'] . $val['kode_prodi'] . $val['kode_mk'] . $val['kelas']);
                    $id_mk = md5($val['kode_mk'] . $val['kode_prodi']);
                    // Untuk cek apakah kelas sudah didlm tabel spada?
                    if (!empty($kelas[$idkls])) {
                        continue;
                    } else {
                        if (!empty($list_mk[$id_mk])) {
                            $cek_id = $this->kelasModel->where('id_kls', $idkls)->countAllResults();
                            if ($cek_id == 0) {
                                $jml_simpan++;
                                $this->kelasModel->simpan_kls($idkls, $val['periode'], $val['kode_prodi'], $val['kode_mk'], $id_mk, $val['kelas']);
                            } else {
                                continue;
                            }
                        }
                    }
                }
            } else {
                $jml_simpan = 0;
            }

            $msg = [
                'berhasil' => [
                    'jumlah' => $jml_simpan,
                    'kode_prodi' => $prodi,
                    'periode' => $periode,
                    'nama_prodi' => $lembaga['nama_prodi']
                ],
                'token' => csrf_hash()
            ];
            echo json_encode($msg);
        } else {
            exit('Mohon maaf, tidak dapat diproses');
        }
    }

    public function do_import_dsnkls()
    {
        if ($this->request->isAJAX()) {
            $periode = $this->request->getPost('periode');
            $prodi = $this->request->getPost('prodi');
            $lembaga = $this->lmbgModel->where('kode_prodi', $prodi)->first();
            $dosen_kelas = get_dosen_kelas($periode, $prodi);
            if (!$dosen_kelas) {
                $dosen_kelas = [];
            }


            $data_tersimpan = $this->dosenklsModel->where('kode_prodi', $prodi)->where('kode_smt', $periode)
                ->join('mstr_matkul as mk', 'mk.id_mk = mstr_dosen_kelas.id_mk')
                ->join('mstr_kelas_kuliah as kls', 'kls.id_kls = mstr_dosen_kelas.id_kls')
                ->findAll();
            $dsn_kelas = [];
            foreach ($data_tersimpan as $i => $val) {
                $id_dsnkls = md5($val['kode_smt'] . $val['kode_prodi'] . $val['kode_mk'] . $val['nama_kls'] . $val['id_dsn']);
                $dsn_kelas[$id_dsnkls] = $val;
            }



            // list_dosen
            $list_dosen = [];
            $data_dosen = $this->dosenModel->findAll();
            foreach ($data_dosen as $key => $v) {
                $list_dosen[$v['id_dsn']] = $v;
            }

            //list_kelas
            $list_kelas = [];
            $data_kelas = $this->kelasModel->where('kdprodi_kls', $prodi)->findAll();
            foreach ($data_kelas as $key => $v) {
                $list_kelas[$v['id_kls']] = $v;
            }


            $jml_simpan = 0;
            if ($dosen_kelas['success'] == 'true') {
                foreach ($dosen_kelas['rows'] as $key => $val) {
                    $id_dsnkls = md5($val['periode'] . $val['kode_prodi'] . $val['kode_mk'] . $val['kelas'] . $val['iddsn']);
                    $id_mk = md5($val['kode_mk'] . $val['kode_prodi']);
                    $id_kls = md5($val['periode'] . $val['kode_prodi'] . $val['kode_mk'] . $val['kelas']);
                    // Untuk cek apakah kelas sudah didlm tabel spada?
                    if (!empty($dsn_kelas[$id_dsnkls])) {
                        continue;
                    } else {
                        if ((!empty($list_dosen[$val['iddsn']])) && (!empty($list_kelas[$id_kls]))) {
                            $cek_id = $this->dosenklsModel->where('id_dsnkls', $id_dsnkls)->countAllResults();
                            if ($cek_id == 0) {
                                $jml_simpan++;
                                $this->dosenklsModel->simpan($id_dsnkls, $val['iddsn'], $val['periode'], $val['kode_prodi'], $val['kode_mk'], $id_mk, $val['kelas'], $id_kls);
                            } else {
                                continue;
                            }
                        }
                    }
                }
            } else {
                $jml_simpan = 0;
            }

            $msg = [
                'berhasil' => [
                    'jumlah' => $jml_simpan,
                    'kode_prodi' => $prodi,
                    'periode' => $periode,
                    'nama_prodi' => $lembaga['nama_prodi']
                ],
                'token' => csrf_hash()
            ];
            echo json_encode($msg);
        } else {
            exit('Mohon maaf, tidak dapat diproses');
        }
    }

    public function do_import_krs()
    {
        if ($this->request->isAJAX()) {
            $periode = $this->request->getPost('periode');
            $prodi = $this->request->getPost('prodi');
            $lembaga = $this->lmbgModel->where('kode_prodi', $prodi)->first();
            $peserta_kelas = get_peserta_kelas($periode, $prodi);
            if (!$peserta_kelas) {
                $peserta_kelas = [];
            }


            $data_tersimpan = $this->pesertaklsModel->where('kode_prodi', $prodi)->where('kode_smt', $periode)
                ->join('mstr_matkul as mk', 'mk.id_mk = mstr_peserta_kelas.id_mk')
                ->join('mstr_kelas_kuliah as kls', 'kls.id_kls = mstr_peserta_kelas.id_kls')
                ->findAll();
            $data_peserta = [];
            foreach ($data_tersimpan as $i => $val) {
                // $id_peserta = md5($val['kode_smt'] . $val['kode_mk'] . $val['nama_kls'] . $val['nim_']);
                $peserta_kelas[$val['id_peserta_kls']] = $val;
            }

            //list_kelas
            $list_kelas = [];
            $data_kelas = $this->kelasModel->where('kdprodi_kls', $prodi)->findAll();
            foreach ($data_kelas as $key => $v) {
                $list_kelas[$v['id_kls']] = $v;
            }


            $jml_simpan = 0;
            if ($peserta_kelas['success'] == 'true') {
                foreach ($peserta_kelas['rows'] as $key => $val) {
                    $id_peserta = md5($val['periode'] . $val['kode_mk'] . $val['kelas'] . $val['nim']);
                    $id_kls = md5($val['periode'] . $val['kode_prodi'] . $val['kode_mk'] . $val['kelas']);
                    $id_mk = md5($val['kode_mk'] . $val['kode_prodi']);
                    // Untuk cek apakah kelas sudah didlm tabel spada?
                    if (!empty($peserta_kelas[$id_peserta])) {
                        continue;
                    } else {
                        if (!empty($list_kelas[$id_kls])) {
                            $cek_id = $this->pesertaklsModel->where('id_peserta_kls', $id_peserta)->countAllResults();
                            if ($cek_id == 0) {
                                $jml_simpan++;
                                $this->pesertaklsModel->simpan($val['periode'], $val['kode_prodi'], $id_kls, $val['kelas'], $id_mk, $val['kode_mk'], $val['nim']);
                            } else {
                                continue;
                            }
                        }
                    }
                }
            } else {
                $jml_simpan = 0;
            }

            $msg = [
                'berhasil' => [
                    'jumlah' => $jml_simpan,
                    'kode_prodi' => $prodi,
                    'periode' => $periode,
                    'nama_prodi' => $lembaga['nama_prodi']
                ],
                'token' => csrf_hash()
            ];
            echo json_encode($msg);
        } else {
            exit('Mohon maaf, tidak dapat diproses');
        }
    }

    // Master MyKurikulum
    function v_mstr_cpl(): string
    {
        $data_lembaga = $this->lmbgModel->groupBy('kode_prodi')->groupBy('nama_prodi')->groupBy('id_lembaga')
            ->select('kode_prodi, nama_prodi, id_lembaga')->findAll();

        $data = [
            'halaman' => ['master-kurikulum', 'master-cpl'],
            'lembaga' => $data_lembaga
        ];

        return view('master/cpl/cpl', $data);
    }

    function v_detail_mk(): string
    {
        $data_lembaga = $this->lmbgModel->groupBy('kode_prodi')->groupBy('nama_prodi')->groupBy('id_lembaga')
            ->select('kode_prodi, nama_prodi, id_lembaga')->findAll();

        $data = [
            'halaman' => ['master-kurikulum', 'master-dtlmk'],
            'lembaga' => $data_lembaga
        ];
        // dd($data_mahasiswa);
        return view('master/cpl/detail_mk', $data);
    }


    function do_import_cpl()
    {
        if ($this->request->isAJAX()) {
            $tahun = $this->request->getPost('angkatan');
            $id_lembaga = $this->request->getPost('prodi');
            $lembaga = $this->lmbgModel->where('id_lembaga', $id_lembaga)->first();
            $cpl_prodi_tahun = get_cpl($id_lembaga, $tahun);

            $data_tersimpan = $this->cplModel->where('id_lembaga', $id_lembaga)->where('tahun_cpl', $tahun)->findAll();
            $cpl = [];
            foreach ($data_tersimpan as $i => $val) {
                $idcpl = $val['id_cpl'];
                $cpl[$idcpl] = $val;
            }
            $timeNow = Time::now('Asia/Jakarta', 'en_US');
            $kode_sync = $timeNow->getTimestamp();
            $jml_simpan = 0;
            $jml_duplicate = 0;
            if ($cpl_prodi_tahun['success'] == true) {
                foreach ($cpl_prodi_tahun['rows'] as $key => $val) {
                    $idcpl = $val['id'];
                    // Untuk cek apakah cpl sudah didlm tabel spada?
                    if (!empty($cpl[$idcpl])) {
                        $this->cplModel->perbarui($idcpl, $val['nomor_cpl'], $val['nama'],  $id_lembaga,  $val['tahun'], $val['target'], $val['batas'], $kode_sync, $val['is_aktif']);
                    } else {
                        $jml_simpan++;
                        $duplicate = $this->cplModel->where('id_cpl', $idcpl)->countAllResults();
                        if ($duplicate > 0) {
                            $jml_duplicate++;
                        } else {
                            $this->cplModel->simpan($idcpl, $val['nomor_cpl'], $val['nama'],  $id_lembaga,  $val['tahun'], $val['target'], $val['batas'], $kode_sync, $val['is_aktif']);
                        }
                    }
                }
            } else {
                $jml_simpan = 0;
            }


            $jml_missing = 0;
            $count_missing =  $this->cplModel->where('id_lembaga', $id_lembaga)
                ->where('tahun_cpl', $tahun)
                ->where('kode_sync !=', $kode_sync)
                ->countAllResults();
            if ($count_missing > 0) {
                $cpl_missing =  $this->cplModel->where('id_lembaga', $id_lembaga)
                    ->where('tahun_cpl', $tahun)
                    ->where('kode_sync !=', $kode_sync)
                    ->findAll();
                foreach ($cpl_missing as $key => $value) {
                    $jml_missing++;
                    $this->cplModel->hapus($value['id_cpl']);
                }
            }

            $msg = [
                'berhasil' => [
                    'jumlah' => $jml_simpan,
                    'jumlah_missing' => $jml_missing,
                    'jumlah_duplicate' => $jml_duplicate,
                    'id_lembaga' => $id_lembaga,
                    'tahun' => $tahun,
                    'nama_prodi' => $lembaga['nama_prodi']
                ],
                'token' => csrf_hash()
            ];
            echo json_encode($msg);
        } else {
            exit('Mohon maaf, tidak dapat diproses');
        }
    }
}
