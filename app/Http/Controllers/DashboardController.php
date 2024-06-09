<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.pages.dashboard');
    }


    public function logout()
    {
        auth()->guard('web')->logout();
        return redirect('/admin/login');
    }
}
