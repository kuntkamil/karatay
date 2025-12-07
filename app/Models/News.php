<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use CrudTrait;
    protected $fillable = [
        'title',
        'slug',
        'image_name',
        'excerpt',
        'content',
        'is_active',
        'published_at',
        'neighborhood_id',
        'topic_id',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'published_at' => 'datetime',
    ];

    public function neighborhood()
    {
        return $this->belongsTo(Neighborhood::class);
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}


