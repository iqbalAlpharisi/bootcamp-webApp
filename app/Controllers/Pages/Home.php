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
        return view('landingPage\home', $data);
    }
    public function loginPage(): string
    {
        $data = [
            'tittle' => 'Login'
        ];
        return view('landingPage\loginPage', $data);
    }
    public function main(): string
    {
        $data = [
            'tittle' => 'tittle main'
        ];
        return view('main\main', $data);
    }
    public function course(): string
    {
        $data = [
            'tittle' => 'Contoh Modul'
        ];
        return view('main\course1', $data);
    }
}
