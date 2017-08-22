<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class languageController extends Controller
{
    public function index(Request $request)
    {
        $languages = Language::all();
        return view('admin.language.language-list', compact('languages'));
    }

    function languageAdd()
    {
        return view('admin.language.add-language');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:190'
        ]);

        $languages = new Language();
        $languages->name = $request->name;
        $languages->save();

        return redirect('admin/language')->with('success', 'Data successfully added!!');
    }

    function languageEdit($id)
    {
        $language = Language::where('id', $id)->first();
        return view('admin.language.edit-language', compact('language'));
    }

    function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $language = Language::find($request->id);
        $language->name = $request->name;
        $language->save();
        return redirect('admin/language')->with('success', 'Data successfully Updated!!');
    }

    function delete($id){
        $language=Language::where('id', $id);
        $language->delete();
        return redirect('admin/language')->with('success', 'Data successfully deleted!!');
    }

}
