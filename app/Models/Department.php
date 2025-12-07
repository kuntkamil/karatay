<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model
{
    use CrudTrait;
    protected $fillable = [
        'name',
        'slug',
        'intro_text',
        'director_message',
        'director_name',
        'director_email',
        'director_phone_extension',
        'director_image',
        'regulation_pdf',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}



