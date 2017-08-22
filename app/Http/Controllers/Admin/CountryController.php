<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CountryController extends Controller
{
    public function index()
    {
        $countrys = Country::orderBy('country_name', 'asc')->paginate(10);
        return view('admin.country.country-list', compact('countrys'));
    }


    function countryAdd()
    {

        return view('admin.country.add-country');
    }

    function countryStore(Request $request)
    {
        $country = new Country();
        $country->country_code = $request->country_code;
        $country->country_name = $request->country_name;
        $country->dial_code = $request->dial_code;
        $country->save();
        return redirect('admin/country')->with('success', 'Data successfully added!!');
    }

    function countryEdit($id)
    {
        $country = Country::where('id', $id)->first();
        return view('admin.country.edit-country', compact('country'));
    }

    function countryUpdate(Request $request)
    {
        $countrys = Country::find($request->id);
        $countrys->country_code = $request->country_code;
        $countrys->country_name = $request->country_name;
        $countrys->dial_code = $request->dial_code;
        $countrys->save();
        return redirect('admin/country')->with('success', 'Data successfully update!!');
    }

    function countryDelete($id)
    {
        $country = Country::where('id', $id);
        $country->delete();
        return redirect('admin/country')->with('success', 'Data successfully delete!!');
    }


}
