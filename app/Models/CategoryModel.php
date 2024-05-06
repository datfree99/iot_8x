<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Padosoft\Sluggable\HasSlug;
use Padosoft\Sluggable\SlugOptions;

/**
 * App\Models\CategoryModel
 *
 * @property int $id
 * @property int $parent_id
 * @property string $name_en
 * @property string|null $name_vi
 * @property string|null $key
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, CategoryModel> $children
 * @property-read int|null $children_count
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel whereNameVi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryModel whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PostModel> $post
 * @property-read int|null $post_count
 * @mixin \Eloquent
 */
class CategoryModel extends Model
{
    use HasSlug;
    protected $table = 'categories';
    protected $guarded = ['id'];

    const PARENT_ID = 0;
    const CATEGORY_ABOUT_US = 'about_us';

    const CATEGORY_PRODUCTS = 'product';
    const CATEGORY_SERVICES = 'services';
    const CATEGORY_SOLUTIONS = 'solutions';
    const CATEGORY_PROJECT = 'project';

    const GROUP_CATEGORY = [
        self::CATEGORY_PRODUCTS,
        self::CATEGORY_SERVICES,
        self::CATEGORY_SOLUTIONS,
        self::CATEGORY_PROJECT,
    ];
    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name_en')
            ->saveSlugsTo('slug');
    }

    public function children()
    {
        return $this->hasMany(CategoryModel::class, 'parent_id');
    }

    public function post()
    {
        return $this->hasMany(PostModel::class, 'category_id');
    }

    public function renderNameHtml()
    {
        return \App::getLocale() == 'vi' ? $this->name_vi : $this->name_en;
    }

    public function linkDetail()
    {
        return route('serviceDetail', ['slug' => $this->slug]);
    }
}
