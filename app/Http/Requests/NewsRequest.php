<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return backpack_auth()->check();
    }

    public function rules(): array
    {
        return [
            'title'          => ['required', 'string', 'max:255'],
            'slug'           => ['required', 'string', 'max:255'],
            'image_name'     => ['nullable', 'string', 'max:255'],
            'excerpt'        => ['nullable', 'string'],
            'content'        => ['nullable', 'string'],
            'is_active'      => ['boolean'],
            'published_at'   => ['nullable', 'date'],
            'neighborhood_id'=> ['nullable', 'integer', 'exists:neighborhoods,id'],
            'topic_id'       => ['nullable', 'integer', 'exists:topics,id'],
        ];
    }
}


