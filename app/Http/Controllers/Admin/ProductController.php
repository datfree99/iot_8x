<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\PostModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(Request $request)
    {
        $products = ProductModel::query();

        if ($request->get('search')) {
            $products = $products->whereHas('post', function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->get('category')) {
            $products = $products->where('category_id', $request->category);
        }

        if ($request->get('status')) {
            $products = $products->whereHas('post', function ($query) use ($request) {
                $query->where('status', $request->status);
            });
        }

        $products = $products
            ->with('category')
            ->with('post')
            ->orderBy('id', 'desc')
            ->paginate();

        $status = [
            '' => "Chọn trạng thái",
            PostModel::STATUS_DRAFT => 'Bản nháp',
            PostModel::STATUS_ACTIVE => 'Hiển thị bài viết',
            PostModel::STATUS_INACTIVE => 'Ẩn bài viết'
        ];
        $categoryProduct = CategoryModel::where('key', 'product')
            ->first();
        return view('admin.product.index')
            ->with('products', $products)
            ->with('status', $status)
            ->with('categoryProduct', $categoryProduct);
    }


    public function create()
    {
        $status = [
            PostModel::STATUS_DRAFT => 'Bản nháp',
            PostModel::STATUS_ACTIVE => 'Hiển thị bài viết',
            PostModel::STATUS_INACTIVE => 'Ẩn bài viết'
        ];
        $categoryProduct = CategoryModel::where('key', 'product')
            ->first();
        return view('admin.product.create')
            ->with('status', $status)
            ->with('categoryProduct', $categoryProduct);
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


        $post = PostModel::create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'contents' => $request->get('contents'),
            'image' => $request->get('image'),
            'seo_title' => $request->get('seo_title'),
            'seo_description' => $request->get('seo_description'),
            'seo_keywords' => $request->get('seo_keywords'),
            'status' => $request->get('status'),
        ]);

        ProductModel::create([
            'category_id' => $request->get('category'),
            'post_id' => $post->id
        ]);

        return redirect()
            ->route('admin.product.index')
            ->with('success', 'Tạo sản phẩm mới thành công');
    }



    public function edit($id)
    {
        $product = ProductModel::findOrFail($id);

        $status = [
            PostModel::STATUS_DRAFT => 'Bản nháp',
            PostModel::STATUS_ACTIVE => 'Hiển thị bài viết',
            PostModel::STATUS_INACTIVE => 'Ẩn bài viết'
        ];
        $categoryProduct = CategoryModel::where('key', 'product')
            ->first();
        return view('admin.product.edit')
            ->with('product', $product)
            ->with('categoryProduct', $categoryProduct)
            ->with('status', $status);
    }


    public function update(Request $request, $id)
    {
        $product = ProductModel::findOrFail($id);

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

        $post = $product->post;
        $post->title = $request->get('title');
        $post->description = $request->get('description');
        $post->contents = $request->get('contents');
        $post->image = $request->get('image');
        $post->status = $request->get('status');
        $post->seo_title = $request->get('seo_title');
        $post->seo_description = $request->get('seo_description');
        $post->seo_keywords = $request->get('seo_keywords');
        $post->save();

        $product->category_id = $request->get('category');
        $product->save();

        return redirect()->route('admin.product.index')
            ->with('success', 'Cập nhật sản phẩm thành công');
    }


    public function destroy($id)
    {
        $product = ProductModel::findOrFail($id);

        $product->delete();
        session()->flash('success', 'Xóa sản phẩm thành công');
        return response()->json([
            'success' => true,
        ]);
    }
}
