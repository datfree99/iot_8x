<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\PostModel;
use Illuminate\Http\Request;

class OnePageController extends Controller
{
    public function aboutUs()
    {
        $category = CategoryModel::where('key', config('category.list_categories.about_us.key'))
            ->firstOrFail();

        $post = PostModel::where('category_id',$category->id)
            ->first();

        return view('admin.one_page.about_us')
            ->with('post', $post);
    }

    public function aboutUsStore(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'required',
            'seo_title' => 'nullable|max:255'
        ], [
            'title.required' => 'Vui lòng nhập tiêu đề sản phẩm',
            'title.max' => 'Không nhập quá 255 ký tự',
            'description.required' => 'Vui lòng nhập mô tả sản phẩm',
            'image.required' => 'Vui lòng chọn hình ảnh cho sản phẩm',
            'seo_title.max' => 'Không nhập quá 255 ký tự',
        ]);

        $category = CategoryModel::where('key', config('category.list_categories.about_us.key'))
            ->firstOrFail();

        PostModel::updateOrCreate([
            'category_id' => $category->id,
        ], [
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'image' => $request->get('image'),
            'seo_title' => $request->get('seo_title'),
            'seo_description' => $request->get('seo_description'),
            'seo_keywords' => $request->get('seo_keywords'),
            'contents' => $request->get('contents'),
        ]);

        return redirect()
            ->back()
            ->with('success', 'Cập nhật bài viết thành công');
    }


}
