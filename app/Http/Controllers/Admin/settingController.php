<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Setting;

class settingController extends Controller
{
    function index(){
        $setting=Setting::first();
        return view('admin.setting.setting-list', compact('setting'));
    }

    function updateSetting(Request $request){
        $setting=Setting::find($request->id);
        $setting->site_name=$request->site_name;
        $setting->onder_amount=$request->onder_amount;
        $setting->par_page_show=$request->par_page_show;
        $setting->site_mode=$request->site_mode;
        $setting->save();
        return redirect('admin/setting/list')->with('message', 'Data successfully Upda');
    }
}
