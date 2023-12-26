<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'halaman' => ['', 'home']
        ];
        return view('home/home', $data);
    }
}
