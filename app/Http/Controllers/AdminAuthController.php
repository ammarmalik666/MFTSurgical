<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function login_view()
    {
        return view('admin.login');
    }
}