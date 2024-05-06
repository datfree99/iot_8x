<?php

namespace App\Service;

use App\Models\CategoryModel;
use Illuminate\Contracts\Foundation\Application;
class BusinessService
{
    private $locale;
    private $app;
    private $categoryServices;

    public function __construct(Application $app)
    {
        $this->app = $app;

        $this->locale = $this->app->getLocale();
        $localSupport = config('core.local_support');
        if (!in_array($this->locale, $localSupport)) {
            $this->locale = $localSupport['vi'];
        }

    }

    public function information(): array
    {
        $info = config('core.business_information');

        return [
            'address' =>  $info['address_'. $this->locale],
            'name' =>  $info['name_'. $this->locale],
            'tel' => $info['tel'],
            'email' => $info['email']
        ];
    }

    public function getInfo($key)
    {
        $info = $this->information();

        return $info[$key] ?? '';
    }

    public function getCategory($key)
    {
        return CategoryModel::where('key', $key)
            ->first();
    }

    public function getCategoryParentService()
    {
        if ($this->categoryServices) {
            return $this->categoryServices;
        }

        $key = config('category.list_categories.services.key');

        $category = $this->getCategory($key);
        if ($category && isset($category->children) && $category->children->count() > 0) {
            return $this->categoryServices = $category->children;
        }

        return null;
    }

    public function getCategoriesAndSub($categoryId)
    {
        $category = CategoryModel::find($categoryId);

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
