<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CountryController extends Controller
{
    public function index(){
        return view('admin.country.country-list');
    }


    function countryaddEdit(){

        return view('admin.country.add-edit-country');
    }

    function store($id){

    }

}
