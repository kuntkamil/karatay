<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    public function authorize(): bool
    {
        return backpack_auth()->check();
    }

    public function rules(): array
    {
        return [
            'title'         => ['required', 'string', 'max:255'],
            'slug'          => ['required', 'string', 'max:255'],
            'description'   => ['nullable', 'string'],
            'image_name'    => ['nullable', 'string', 'max:255'],
            'department_id' => ['nullable', 'integer', 'exists:departments,id'],
            'is_featured'   => ['boolean'],
            'is_active'     => ['boolean'],
        ];
    }
}


