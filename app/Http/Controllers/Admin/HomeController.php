<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Admin Dashboard
     */
    public function index()
    {
        if (Auth::check())
            return view('admin.dashboard.index');
        return redirect()->route('admin.login');
    }
}
