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
        return $this->title;
    }

    public function renderDescription()
    {
        return $this->description;
    }

    public function renderContents()
    {
        return $this->contents;
    }
}
