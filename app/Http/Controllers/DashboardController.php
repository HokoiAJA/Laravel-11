<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'active' => 'dashboard'
        ]);
    }
}
