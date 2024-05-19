<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Padosoft\Sluggable\HasSlug;
use Padosoft\Sluggable\SlugOptions;


/**
 * App\Models\PostModel
 *
 * @property int $id
 * @property int|null $category_id
 * @property string $slug
 * @property string $title
 * @property string|null $description
 * @property string $contents
 * @property string|null $image
 * @property string|null $seo_title
 * @property string|null $seo_description
 * @property string|null $seo_keywords
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereContents($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereSeoDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereSeoKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereUpdatedAt($value)
 * @property-read \App\Models\CategoryModel|null $category
 * @property string|null $key
 * @property string|null $title_en
 * @property string|null $description_en
 * @property string|null $contents_en
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereContentsEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereTitleEn($value)
 * @mixin \Eloquent
 */
class PostModel extends Model
{
    use HasSlug;
    protected $table = 'posts';
    protected $guarded = ['id'];


    const STATUS_DRAFT = 'draft';
    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';


    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function category()
    {
        return $this->belongsTo(CategoryModel::class, 'category_id');
    }

    public function scopeActive($query)
    {
        return $query->where('status', self::STATUS_ACTIVE);
    }

    public function statusHtml()
    {
        if ($this->status == self::STATUS_ACTIVE) {
            return '<span class="text-success">Hiển thị bài viết</span>';
        } elseif ($this->status == self::STATUS_INACTIVE) {
            return '<span class="text-danger">Ẩn bài viết</span>';
        }

        return '<span class="text-info">Bản nháp</span>';
    }

    public function renderTitle()
    {
        return \App::getLocale() == 'vi' ? $this->title : $this->title_en;
    }

    public function renderDescription()
    {
        return \App::getLocale() == 'vi' ? $this->description : $this->description_en;
    }

    public function renderContents()
    {
        return \App::getLocale() == 'vi' ? $this->contents : $this->contents_en;
    }

    public function showImage()
    {
        return asset($this->image);
    }

    public function renderSeoTitle()
    {
        return $this->seo_title ? $this->seo_title : $this->renderTitle();
    }

    public function renderSeoDescription()
    {
        return $this->seo_description ? $this->seo_description : $this->renderDescription();
    }

    public function productDetailLink()
    {
        return route('product.detail', ['slug' => $this->slug]);
    }

    public function serviceDetailLink()
    {
        return route('service.detail', ['slug' => $this->slug]);
    }

    public function solutionDetailLink()
    {
        return route('solution.detail', ['slug' => $this->slug]);
    }

    public function projectDetailLink()
    {
        return route('project.detail', ['slug' => $this->slug]);
    }
}
