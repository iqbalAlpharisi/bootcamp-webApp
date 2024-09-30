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

    // Bab 1
    public function bab1_1(): string
    {
        $data = [
            'tittle' => 'CodeIngiter 4',
            'navbar' => 'navbar2'
        ];
        return view('main\ci4\bab1\sub1', $data);
    }
    public function bab1_2(): string
    {
        $data = [
            'tittle' => 'CodeIngiter 4',
            'navbar' => 'navbar2'
        ];
        return view('main\ci4\bab1\sub2', $data);
    }
    public function bab1_3(): string
    {
        $data = [
            'tittle' => 'CodeIngiter 4',
            'navbar' => 'navbar2'
        ];
        return view('main\ci4\bab1\sub3', $data);
    }
    public function bab1_4(): string
    {
        $data = [
            'tittle' => 'CodeIngiter 4',
            'navbar' => 'navbar2'
        ];
        return view('main\ci4\bab1\sub4', $data);
    }
    public function bab1_5(): string
    {
        $data = [
            'tittle' => 'CodeIngiter 4',
            'navbar' => 'navbar2'
        ];
        return view('main\ci4\bab1\sub5', $data);
    }
    public function bab1_6(): string
    {
        $data = [
            'tittle' => 'CodeIngiter 4',
            'navbar' => 'navbar2'
        ];
        return view('main\ci4\bab1\sub6', $data);
    }
    public function bab1_7(): string
    {
        $data = [
            'tittle' => 'CodeIngiter 4',
            'navbar' => 'navbar2'
        ];
        return view('main\ci4\bab1\sub7', $data);
    }
    public function bab1_8(): string
    {
        $data = [
            'tittle' => 'CodeIngiter 4',
            'navbar' => 'navbar2'
        ];
        return view('main\ci4\bab1\sub8', $data);
    }

    // Bab 2
    public function bab2_1(): string
    {
        $data = [
            'tittle' => 'CodeIngiter 4',
            'navbar' => 'navbar2'
        ];
        return view('main\ci4\bab2\sub1', $data);
    }
}
