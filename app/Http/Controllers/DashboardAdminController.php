<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    //
    public function index()
    {
        return view('dashboardAdmin.pages.data', [
            'title' => 'Dashboard Admin -Staycation',
            'users' => User::all()
        ]);
    }
}
