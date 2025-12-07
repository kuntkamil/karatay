<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return backpack_auth()->check();
    }

    public function rules(): array
    {
        return [
            'name'                    => ['required', 'string', 'max:255'],
            'slug'                    => ['required', 'string', 'max:255'],
            'intro_text'              => ['nullable', 'string'],
            'director_message'        => ['nullable', 'string'],
            'director_name'           => ['nullable', 'string', 'max:255'],
            'director_email'          => ['nullable', 'email', 'max:255'],
            'director_phone_extension'=> ['nullable', 'string', 'max:50'],
            'director_image'          => ['nullable', 'string', 'max:255'],
            'regulation_pdf'          => ['nullable', 'string', 'max:255'],
            'is_active'               => ['boolean'],
        ];
    }
}


