<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderItemRequest extends FormRequest
{
    public function authorize(): bool
    {
        return backpack_auth()->check();
    }

    public function rules(): array
    {
        return [
            'image_name' => ['required', 'string', 'max:255'],
            'title'      => ['nullable', 'string', 'max:255'],
            'is_active'  => ['boolean'],
        ];
    }
}


