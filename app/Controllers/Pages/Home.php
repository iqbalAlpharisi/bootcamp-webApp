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


    public function myCourse(): string
    {
        $data = [
            'tittle' => 'My Course',
            'navbar' => 'navbar2'
        ];
        return view('main\myCourse', $data);
    }


    public function setting(): string
    {
        $data = [
            'tittle' => 'Setting',
            'navbar' => 'navbar2'
        ];
        return view('main\setting', $data);
    }

    public function modulList(): string
    {
        $data = [
            'tittle' => 'Modul',
            'navbar' => 'navbar2'
        ];
        return view('main\modulList', $data);
    }


    public function ci4(): string
    {
        $data = [
            'tittle' => 'Code Igniter 4',
            'navbar' => 'navbar2'
        ];
        return view('main\ci4\path', $data);
    }
}
