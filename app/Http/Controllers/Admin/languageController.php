<?php

namespace App\Http\Controllers\Admin;
use App\Models\Admin\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class languageController extends Controller
{
    public function index()
    {
        return view('admin.language.language-list');
    }

    function languageAddEdit($id=null)
    {
        if ($id) {
            $language = findOrFail($id);
        }
        return view('admin.language.add-edit-language', compact('language'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:190'
        ]);

        $request->user()->languages()->UpdateOrCreate(['id' => @$request->id], $request->only('name'));
        if($request->id){
            return redirect('admin/language')->with('success','Data successfully updated!!');
        }
        return redirect('admin/language')->with('success','Data successfully added!!');
    }
}
