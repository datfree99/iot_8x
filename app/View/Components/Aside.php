<?php

namespace App\View\Components;

use App\Models\CategoryModel;
use App\Models\PostModel;
use Illuminate\View\Component;

class Aside extends Component
{
    public $productCategories;
    public $solutions;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->productCategories = category()->findByKey('product');

        $cateSolution = category()->getCategoriesAndSubByKey(config('category.list_categories.solutions.key'))
            ->pluck('id')
            ->toArray();

        $this->solutions = PostModel::whereIn('category_id', $cateSolution)
            ->orderByDesc('id')
            ->take(6)
            ->get(['id', 'title', 'title_en', 'image', 'slug']);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.aside');
    }
}
