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
    public function store(): string
    {
        $data = [
            'tittle' => 'Store',
            'navbar' => 'navbar2'
        ];
        return view('main\store', $data);
    }
    public function bab(): string
    {
        $data = [
            'tittle' => 'CodeIngiter 4',
            'navbar' => 'navbar2'
        ];
        return view('main\ci4\bab1', $data);
    }
    public function bab2(): string
    {
        $data = [
            'tittle' => 'CodeIngiter 4',
            'navbar' => 'navbar2'
        ];
        return view('main\ci4\bab2', $data);
    }
    public function bab3(): string
    {
        $data = [
            'tittle' => 'CodeIngiter 4',
            'navbar' => 'navbar2'
        ];
        return view('main\ci4\bab3', $data);
    }
}
