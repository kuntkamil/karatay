<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnouncementRequest extends FormRequest
{
    public function authorize(): bool
    {
        return backpack_auth()->check();
    }

    public function rules(): array
    {
        return [
            'title'     => ['required', 'string', 'max:255'],
            'date'      => ['nullable', 'date'],
            'url'       => ['nullable', 'url', 'max:2048'],
            'is_active' => ['boolean'],
        ];
    }
}


