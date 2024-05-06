<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\PostModel;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(Request $request)
    {
        $categories = CategoryModel::whereIn('key', CategoryModel::GROUP_CATEGORY)
            ->get();

        $status = [
            '' => "Chọn trạng thái",
            PostModel::STATUS_DRAFT => 'Bản nháp',
            PostModel::STATUS_ACTIVE => 'Hiển thị bài viết',
            PostModel::STATUS_INACTIVE => 'Ẩn bài viết'
        ];


        $posts = PostModel::query();

        if ($request->get('search')) {
            $posts = $posts->where('title', 'like', '%' . $request->search . '%');;
        }

        if ($request->get('category')) {
            $findCategories = business()
                ->getCategoriesAndSub((int) $request->get('category'))
                ->pluck('id')
                ->toArray();
            $posts = $posts->whereIn('category_id', $findCategories);
        }

        if ($request->get('status')) {
            $posts = $posts->where('status', $request->status);
        }

        $posts = $posts
            ->with('category')
            ->orderBy('id', 'desc')
            ->paginate();

        return view('admin.post.index')
            ->with('categories', $categories)
            ->with('status', $status)
            ->with('posts', $posts);
    }


    public function create()
    {
        $categories = CategoryModel::whereIn('key', CategoryModel::GROUP_CATEGORY)
            ->get();

        $status = [
            '' => "Chọn trạng thái",
            PostModel::STATUS_DRAFT => 'Bản nháp',
            PostModel::STATUS_ACTIVE => 'Hiển thị bài viết',
            PostModel::STATUS_INACTIVE => 'Ẩn bài viết'
        ];
        return view('admin.post.create')
            ->with('categories', $categories)
            ->with('status', $status);
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'category' => 'required',
            'image' => 'required',
            'status' => 'required'
        ], [
            'title.required' => 'Vui lòng nhập tiêu đề sản phẩm',
            'title.max' => 'Không nhập quá 255 ký tự',
            'description.required' => 'Vui lòng nhập mô tả sản phẩm',
            'description.max' => 'Không nhập quá 255 ký tự',
            'category.required' => 'Vui lòng chọn danh mục sản phẩm',
            'image.required' => 'Vui lòng chọn hình ảnh cho sản phẩm',
            'status.required' => 'Vui lòng chọn trạng thái'
        ]);


        PostModel::create([
            'category_id' => $request->get('category'),
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'contents' => $request->get('contents'),
            'image' => $request->get('image'),
            'seo_title' => $request->get('seo_title'),
            'seo_description' => $request->get('seo_description'),
            'seo_keywords' => $request->get('seo_keywords'),
            'status' => $request->get('status'),
        ]);

        return redirect()->route('admin.post.index')->with('success', 'Thêm bài viết thành công');
    }

    public function edit($id)
    {
        $post = PostModel::findOrFail($id);
        $status = [
            PostModel::STATUS_DRAFT => 'Bản nháp',
            PostModel::STATUS_ACTIVE => 'Hiển thị bài viết',
            PostModel::STATUS_INACTIVE => 'Ẩn bài viết'
        ];

        return view('admin.post.edit')
            ->with('post', $post)
            ->with('status', $status);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
