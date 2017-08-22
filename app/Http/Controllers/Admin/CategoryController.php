<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Mockery\Exception;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_categories = Category::whereNotIn('parent_id', [0])
            ->latest()
            ->paginate(2);

        if (\Request::ajax()) {
            return view('admin.category.view_sub_category_per_page', compact('sub_categories'));
        }
        return view('admin.category.view_sub_category', compact('sub_categories'));
    }

    /**
     * @param Request $request
     * @return $this
     */
    public function create(Request $request)
    {
        $type = $request->type;
        $parent_categories = Category::where(['parent_id' => 0])->orderby('name', 'asc')->get();
        return view('admin.category.add_category')->with(compact(['parent_categories', 'type']));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function store(Request $request)
    {
        if ($request->category_type == 1) {
            $this->validate($request, [
                'name' => 'required|string|min:2|max:190|unique:categories',
                'parent_category_id' => 'required|integer'
            ]);
            $parent_id = $request->parent_category_id;
        } else {
            $this->validate($request, [
                'name' => 'required|string|min:2|max:190|unique:es_categories',
                'category_image' => 'required|image'
            ]);

            $parent_id = 0;
        }

            DB::beginTransaction();
            try {
                $category = $request->user()->category()->updateOrcreate(['id' => @$request->id], [
                    'name' => $request->name,
                    'alias' => strtolower(str_slug($request->name, '-')),
                    'parent_id' => $parent_id,
                    'status' => 1
                ]);

                $img_url = '';
                if ($request->category_type == 0) {
                    if ($request->hasFile('category_image')) {
                        $img = str_replace_first(' ', '-', 'store-category-img-' . microtime() . '.' . $request->file('category_image')->getClientOriginalExtension());
                        $img_url = $request->file('category_image')->storePubliclyAs('Category', $img, 'public');

                        $category->image()->updateOrcreate(['media_id' => @$request->id], [
                            'media_type' => 'category',
                            'type' => 'category',
                            'url' => $img_url
                        ]);

                    }
                }
            } catch (Exception $e) {
                if ($img_url != '') {
                    Storage::disk('public')->delete($img_url);
                }
                DB::rollback();
                throw $e;
            }
            DB::commit();
//            if ($parent_id == 0) {
//                $parent_categories = Category::select('id', 'name')->where('parent_id', 0)->orderby('name', 'asc')->get();
//            } else {
//                $parent_categories = array();
//            }
            return redirect()->back()->with('success','Data Successfully saved');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Admin\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
