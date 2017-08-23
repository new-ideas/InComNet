<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Bayer;

class bayerController extends Controller
{
    public function index()
    {
        return view('admin.bayer.bayer-list');
    }


}
