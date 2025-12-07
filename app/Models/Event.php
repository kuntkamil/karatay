<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use CrudTrait;
    protected $fillable = [
        'title',
        'category',
        'location',
        'starts_at',
        'image_name',
        'is_active',
    ];

    protected $casts = [
        'starts_at' => 'datetime',
        'is_active' => 'boolean',
    ];
}


