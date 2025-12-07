<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Procurement extends Model
{
    use CrudTrait;
    protected $fillable = [
        'file_no',
        'title',
        'description',
        'deadline_at',
        'spec_url',
        'bid_url',
        'is_active',
    ];

    protected $casts = [
        'deadline_at' => 'datetime',
        'is_active' => 'boolean',
    ];
}


