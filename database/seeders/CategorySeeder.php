<?php

namespace Database\Seeders;

use App\Models\CategoryModel;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = config('category.list_categories', []);
        CategoryModel::query()->delete();
        foreach ($categories as $name => $category) {
            CategoryModel::create([
                'name_en' => $category['en'],
                'name_vi' => $category['vi'],
                'key' => $name
            ]);
        }
    }
}
