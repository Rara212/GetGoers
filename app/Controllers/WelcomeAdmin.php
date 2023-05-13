<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class WelcomeAdmin extends BaseController
{
    public function index()
    {
        return view('admin/admin');
    }
}
