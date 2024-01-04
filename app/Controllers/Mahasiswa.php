<?php

namespace App\Controllers;

use App\Models\CourseModel;
use App\Models\LembagaModel;
use App\Models\MahasiswaModel;
use App\Models\PenggunaModel;

class Mahasiswa extends BaseController
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
        return view('mahasiswa/home_mhs', $data);
    }

    public function nilai_cpl(): string
    {
        $data = [
            'halaman' => ['', 'nilai-cpl']
        ];
        return view('mahasiswa/nilai_cpl', $data);
    }
    public function nilai_lms(): string
    {
        $data = [
            'halaman' => ['', 'home']
        ];
        return view('mahasiswa/nilai_lms', $data);
    }
    public function nilai_subcpmk(): string
    {
        $data = [
            'halaman' => ['', 'home']
        ];
        return view('mahasiswa/nilai_subcpmk', $data);
    }
    public function course_asisten(): string
    {
        $data = [
            'halaman' => ['', 'course-asisten']
        ];
        return view('mahasiswa/course_asisten', $data);
    }
}
