<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{

    public function index()
    {
        $parentCategories = CategoryModel::query()->whereIn('key', ['product', 'services', 'solutions'])
            ->get();

        $categories = CategoryModel::where('parent_id', 0)->paginate();

        return view('admin.category.index')
            ->with('parentCategories', $parentCategories)
            ->with('categories', $categories);
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|exists:categories,id',
            'name_vi' => 'required|max:255',
            'name_en' => 'required|max:255',
        ], [
            'parent_id.required' => 'Vui lòng nhập parent category',
            'parent_id.exists' => 'Parent category không tồn tại',
            'name_vi.required' => 'Vui lòng nhập tên danh mục',
            'name_en.required' => 'Vui lòng nhập tên danh mục',
            'name_vi.max' => 'Vui lòng không nhập quá 255 ký tự',
            'name_en.max' => 'Vui lòng không nhập quá 255 ký tự',
        ]);

        CategoryModel::create([
            'parent_id' => $request->get('category'),
            'name_vi' => $request->get('name_vi'),
            'name_en' => $request->get('name_en'),
        ]);

        return redirect()->back()->with('success', trans('label.create_success'));
    }

    public function edit($category)
    {
        $category = CategoryModel::findOrFail($category);
        $category->edit = route('admin.category.update', ['category' => $category->id]);
        return response()->json([
            'success' => true,
            'category' => $category,
        ]);
    }

    public function update(Request $request, $category)
    {
        $category = CategoryModel::findOrFail($category);

        $validate = \Validator::make($request->all(), [
            'category' => 'required|exists:categories,id',
            'name_vi' => 'required|max:255',
            'name_en' => 'required|max:255',
        ], [
            'parent_id.required' => 'Vui lòng nhập parent category',
            'parent_id.exists' => 'Parent category không tồn tại',
            'name_vi.required' => 'Vui lòng nhập tên danh mục',
            'name_en.required' => 'Vui lòng nhập tên danh mục',
            'name_vi.max' => 'Vui lòng không nhập quá 255 ký tự',
            'name_en.max' => 'Vui lòng không nhập quá 255 ký tự',
        ]);
        if ($validate->fails()) {
            session()->flash('error', $validate->errors()->first());
            return response()->json([
                'success' => false,
            ]);
        }

        $category->update([
            'parent_id' => $request->get('category'),
            'name_en' => $request->get('name_en'),
            'name_vi' => $request->get('name_vi'),
        ]);

        session()->flash('success', trans('label.updated_success'));
        return response()->json([
            'success' => true,
        ]);
    }


    public function destroy($category)
    {

        $category = CategoryModel::findOrFail($category);

        if ($category->children->isNotEmpty()){
            foreach ($category->children as $child) {
                $child->update([
                    'parent_id' => $category->parent_id
                ]);
            }
        }

        $category->delete();
        session()->flash('success', trans('label.deleted_success'));
        return response()->json([
            'success' => true,
        ]);
    }
}
