<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Sociallink;
use Illuminate\Support\Facades\Storage;

class SociallinkController extends Controller
{
    public function index()
    {
        $sociallinks = Sociallink::OrderBy('name', 'asc')->paginate(1);
        return view('admin.socailLink.socaillink-list', compact('sociallinks'));
    }

    public function addEdit($id = null)
    {
        if ($id) {
            $sociallink = Sociallink::findOrFail($id);
        }
        return view('admin.socailLink.add-edit-socaillink', compact('sociallink'));
    }

    public function store(Request $request)
    {
        if ($request->id) {
            $this->validate($request, [
                'name' => 'required|max:190'
            ]);
        } else {
            $this->validate($request, [
                'name' => 'required|max:190',
                'icon' => 'required|image'
            ]);
        }


        $image_url = '';
        $new_icon = '';
        if ($request->hasFile('icon')) {
            $image_name = str_replace(' ', '-', 'icon-' . microtime() . '-' . '.' . $request->file('icon')->getClientOriginalExtension());
            $new_icon = $request->file('icon')->storePubliclyAs('socialIcon', $image_name, 'public');
        }

        if ($new_icon == '') {
            $image_url = @$request->old_image;
        } else {
            $image_url = $new_icon;
        }

        $social = $request->user()->socialLinks()->UpdateOrCreate(['id' => @$request->id], ['name' => $request->name, 'icon' => $image_url]);

        if ($request->id) {
            if ($new_icon != '') {
                $old_icon = $request->old_image;
                Storage::disk('public')->delete($old_icon);
            }
            return redirect()->route('social-link.index')->with('success', 'Data successfully updated!!');
        }
        return redirect()->route('social-link.index')->with('success', 'Data successfully added!!');
    }

    public function delete($id)
    {
        $sociallink = Sociallink::findOrFail($id);
        $sociallink->delete();
        return redirect()->back()->with('success', 'Data successfully deleted!!');
    }

}
