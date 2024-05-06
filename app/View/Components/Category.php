<?php

namespace App\View\Components;

use App\Models\CategoryModel;
use Illuminate\View\Component;

class Category extends Component
{
    public $productCategories;
    public $serviceCategories;
    public $solutionCategories;

    public $showCateMobile;
    public $showCateDesktop;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($showCateDesktop = false, $showCateMobile = false)
    {
        $this->productCategories = CategoryModel::where('key', 'product')
            ->first();

        $this->serviceCategories = CategoryModel::where('key', 'services')
            ->first();

        $this->solutionCategories = CategoryModel::where('key', 'solutions')
            ->first();

        $this->showCateDesktop = $showCateDesktop;
        $this->showCateMobile = $showCateMobile;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.category');
    }
}
