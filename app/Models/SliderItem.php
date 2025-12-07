<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class SliderItem extends Model
{
    use CrudTrait;
    protected $fillable = [
        'image_name',
        'title',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
