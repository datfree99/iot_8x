<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\ProductModel
 *
 * @property int $id
 * @property int $category_id
 * @property int $post_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductModel whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductModel wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductModel whereUpdatedAt($value)
 * @property-read \App\Models\CategoryModel $category
 * @property-read \App\Models\PostModel $post
 * @mixin \Eloquent
 */
class ProductModel extends Model
{

    protected $table = 'products';
    protected $guarded = ['id'];


    public function category()
    {
        return $this->belongsTo(CategoryModel::class, 'category_id', 'id');
    }

    public function post()
    {
        return $this->belongsTo(PostModel::class, 'post_id', 'id');
    }


}
