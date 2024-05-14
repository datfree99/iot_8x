<?php

namespace App\Service;

use App\Models\CategoryModel;
use Illuminate\Database\Eloquent\Builder;

class CategoryService
{
    public $categories;
    public $categoryTrees;
    public $categoriesKeyBySlugs;
    public function __construct()
    {
        $this->getCategoryTrees();
    }

    /**
     * Lấy danh mục theo kiểu cây
     *
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getCategoryTrees()
    {
        if ($this->categoryTrees) {
            return $this->categoryTrees;
        }

        return $this->categoryTrees = CategoryModel::with('children')
            ->where('parent_id', CategoryModel::PARENT_ID)
            ->get();
    }

    public function getCategoriesAndSubByKey($key): \Illuminate\Support\Collection
    {
        $category = $this->categoryTrees->where('key', $key)->first();

        if (!$category) {
            return collect();
        }

        $categories = [
            $category
        ];
        if (isset($category->children)) {
            $categories = array_merge($categories,  $this->recursiveCate($category->children));
        }

        return collect($categories);
    }

    public function findByKey($key)
    {
        return $this->categoryTrees->where('key', $key)->first();
    }

    public function categories(): \Illuminate\Support\Collection
    {
        if ($this->categories) {
            return $this->categories;
        }

        $categories = [];
        foreach ($this->categoryTrees as $categoryTree) {
            $categories[] = $categoryTree;
            if (isset($categoryTree->children)) {
                $categories = array_merge($categories,  $this->recursiveCate($categoryTree->children));
            }
        }

        return $this->categories = collect($categories);
    }

    public function keyBySlug(): array
    {
        if ($this->categoriesKeyBySlugs) {
            return $this->categoriesKeyBySlugs;
        }

        return $this->categoriesKeyBySlugs = $this->categories()->pluck('slug', 'key')->toArray();
    }

    public function findBySlug($slug)
    {
        return $this->categories()->where('slug', $slug)->first();
    }

    public function findById($id)
    {
        return $this->categories()->where('id', $id)->first();
    }

    private function recursiveCate($categories, $newCategories = [])
    {
        $list = [];
        foreach ($categories as $item) {
            $newCategories[] = $item;
            if (isset($item->children)) {
                $newCategories = array_merge($newCategories, $this->recursiveCate($item->children, $list));
            }
        }
        return $newCategories;
    }

}
