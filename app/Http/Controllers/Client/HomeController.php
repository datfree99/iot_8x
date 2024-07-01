<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\PostModel;
use App\Models\SliderModel;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\SEOTools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        SEOMeta::setTitle(trans('label.automation_solutions'));

        $sliders = SliderModel::get();
        $catePost = category()->findByKey(config('category.list_categories.about_us.key'));
        $aboutUs = $catePost ? $catePost->posts()->first() : new PostModel();

        $products = $this->getPostProduct();
        $services = $this->getPostService(4);
        $solutions = $this->geSolution();
        $projects = $this->getProject();

        $directory = public_path('images/partners');
        $logoPartners = File::files($directory);

        return view('client.home', compact('sliders'))
            ->with('logoPartners', $logoPartners)
            ->with('aboutUs', $aboutUs)
            ->with('products', $products)
            ->with('services', $services)
            ->with('solutions', $solutions)
            ->with('projects', $projects);
    }

    public function aboutUs()
    {
        $category = CategoryModel::where('key', config('category.list_categories.about_us.key'))
            ->firstOrFail();

        $post = PostModel::where('category_id', $category->id)
            ->firstOrFail();

        SEOMeta::setTitle(trans('label.about_us'));
        SEOMeta::setDescription($post->renderDescription());
        OpenGraph::addImage($post->showImage(), ['height' => 300, 'width' => 300]);
        return view('client.about_us')
            ->with('post', $post);
    }

    public function contact()
    {
        SEOMeta::setTitle(trans('label.contact'));
        return view('client.contact');
    }


    public function product(Request $request)
    {
        SEOMeta::setTitle(trans('label.products'));

        $category = category()->findBySlug($request->route('slug'));

        $categoryIds = [];
        if ($category) {
            $categoryIds[] = $category->id;
            if ($category->children->count() > 0) {
                $categoryIds = array_merge($categoryIds, $category->children->pluck('id')->toArray());
            }
        } else {
            $category = category()->getCategoriesAndSubByKey(config('category.list_categories.product.key'));
            $categoryIds = $category->pluck('id')->toArray();
        }


        $products = PostModel::whereIn('category_id', $categoryIds)
            ->orderByDesc('id')
            ->paginate(20);


        return view('client.product')
            ->with('category', $category)
            ->with('products', $products);
    }

    public function service(Request $request)
    {
        SEOMeta::setTitle(trans('label.service'));
        $services = $this->getPostService();

        return view('client.service')
            ->with('services', $services);
    }

    public function solution(Request $request)
    {
        SEOMeta::setTitle(trans('label.solution'));
        $solutions = $this->geSolution(16);

        return view('client.solution')
            ->with('solutions', $solutions);
    }

    public function project()
    {
        SEOMeta::setTitle(trans('label.projects'));
        $projects = $this->getProject(16);


        return view('client.project')
            ->with('projects', $projects);
    }

    public function customers()
    {
        SEOMeta::setTitle(trans('label.customers'));

        return view('client.customers');
    }

    private function getPostProduct()
    {
        $cateProduct = category()->getCategoriesAndSubByKey(config('category.list_categories.product.key'))
            ->pluck('id')
            ->toArray();

        return PostModel::whereIn('category_id', $cateProduct)
            ->orderByDesc('id')
            ->take(3)
            ->get(['id', 'title', 'title_en', 'image', 'slug']);
    }

    private function getPostService($limit = null){
        $cateService = category()->getCategoriesAndSubByKey(config('category.list_categories.services.key'))
            ->pluck('id')
            ->toArray();

        $model = PostModel::whereIn('category_id', $cateService)
            ->orderByDesc('id');

        if ($limit) {
            $model = $model->take($limit);
        }

        return $model->get(['id', 'title', 'title_en', 'description', 'description_en', 'image', 'slug']);
    }

    private function geSolution($limit = null)
    {
        $cateSolution = category()->getCategoriesAndSubByKey(config('category.list_categories.solutions.key'))
            ->pluck('id')
            ->toArray();

        $model = PostModel::whereIn('category_id', $cateSolution)
            ->orderByDesc('id');

        if ($limit) {
            return $model->select(['id', 'title', 'title_en', 'image', 'slug'])
                ->paginate($limit);
        }

        return $model
            ->take(8)
            ->get(['id', 'title', 'title_en', 'image', 'slug']);
    }

    private function getProject($limit = null)
    {

        $cateProject = category()->getCategoriesAndSubByKey(config('category.list_categories.project.key'))
            ->pluck('id')
            ->toArray();

        $model = PostModel::whereIn('category_id', $cateProject)
            ->orderByDesc('id');

        if ($limit) {
            return $model->select(['id', 'title', 'title_en', 'description', 'description_en', 'image', 'slug'])
                ->paginate($limit);
        }

        return $model->take(8)
            ->get(['id', 'title', 'title_en', 'description', 'description_en', 'image', 'slug']);
    }

    public function privacy()
    {
        return view('client.privacy');
    }
}
