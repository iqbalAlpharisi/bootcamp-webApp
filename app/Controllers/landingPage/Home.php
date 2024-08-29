<?php

namespace App\Controllers\landingPage;

use App\controllers\BaseController;

class Home extends BaseController
{
    public function index(): string
    {
        return view('landingPage\main');
    }
}
