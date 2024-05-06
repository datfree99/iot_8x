<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SliderModel
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $redirect
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SliderModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SliderModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SliderModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|SliderModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderModel whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderModel whereRedirect($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderModel whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderModel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SliderModel extends Model
{
    protected $table = 'sliders';
    protected $guarded = ['id'];

    public function renderTitle()
    {
        return \App::getLocale() == 'vi' ? $this->title_vi : $this->title_en;
    }
}
