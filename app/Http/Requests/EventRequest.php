<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    public function authorize(): bool
    {
        return backpack_auth()->check();
    }

    public function rules(): array
    {
        return [
            'title'      => ['required', 'string', 'max:255'],
            'category'   => ['nullable', 'string', 'max:255'],
            'location'   => ['nullable', 'string', 'max:255'],
            'starts_at'  => ['nullable', 'date'],
            'image_name' => ['nullable', 'string', 'max:255'],
            'is_active'  => ['boolean'],
        ];
    }
}


