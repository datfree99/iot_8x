<?php

namespace App\View\Components;

use App\Models\CategoryModel;
use Illuminate\View\Component;

class PostCategory extends Component
{

    public $productCategories;

    public function __construct()
    {
        $this->productCategories = CategoryModel::where('key', 'product')
            ->first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post-category');
    }
}
