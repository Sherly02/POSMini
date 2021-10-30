<?php

namespace App\Controllers;

class AdminDashboard extends BaseController
{
    public function index()
    {
        echo view('dashboard');
    }
}