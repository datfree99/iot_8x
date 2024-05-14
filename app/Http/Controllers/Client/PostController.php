<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\PostModel;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function product(Request $request, $slug)
    {
        $product = PostModel::where('slug', $slug)
            ->firstOrFail();

        $similarProducts = PostModel::where('category_id', $product->category_id)
            ->where('id', '<>', $product->id)
            ->take(8)->get();

        return view('client.post.product', compact('product', 'similarProducts'));
    }

}
