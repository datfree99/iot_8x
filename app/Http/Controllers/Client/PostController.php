<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\PostModel;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function detail($slug)
    {
        $category = CategoryModel::where('slug', $slug)->firstOrFail();

        $post = $category->posts()->orderByDesc('id')->firstOrFail();

        SEOMeta::setTitle($post->renderTitle());
        SEOMeta::setDescription($post->renderDescription());
        return view('client.post.detail', compact('post'));
    }



    public function product(Request $request, $slug)
    {
        $product = PostModel::where('slug', $slug)
            ->firstOrFail();

        $similarProducts = PostModel::where('category_id', $product->category_id)
            ->where('id', '<>', $product->id)
            ->take(8)->get();

        return view('client.post.product', compact('product', 'similarProducts'));
    }

    public function service($slug)
    {
        $service = PostModel::where('slug', $slug)
            ->firstOrFail();

        return view('client.post.service', compact('service'));
    }

    public function solution($slug)
    {
        $solution = PostModel::where('slug', $slug)
            ->firstOrFail();

        return view('client.post.solution', compact('solution'));
    }

    public function project($slug)
    {
        $project = PostModel::where('slug', $slug)
            ->firstOrFail();

        return view('client.post.project', compact('project'));
    }
}
