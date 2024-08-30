<?php

namespace App\Controllers\Pages;

use App\controllers\BaseController;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'tittle' => 'Selamat Datang - Bootcamp Web Aplikasi'
        ];
        return view('landingPage\main', $data);
    }
    public function main(): string
    {
        $data = [
            'tittle' => 'tittle main'
        ];
        return view('main\main', $data);
    }
}
