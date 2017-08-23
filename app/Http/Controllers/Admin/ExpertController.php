<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Expert;

class ExpertController extends Controller
{
    public function index()
    {
        return view('admin.expert.expert-list');
    }

}
