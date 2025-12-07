<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProcurementRequest extends FormRequest
{
    public function authorize(): bool
    {
        return backpack_auth()->check();
    }

    public function rules(): array
    {
        return [
            'file_no'     => ['nullable', 'string', 'max:255'],
            'title'       => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'deadline_at' => ['nullable', 'date'],
            'spec_url'    => ['nullable', 'url', 'max:2048'],
            'bid_url'     => ['nullable', 'url', 'max:2048'],
            'is_active'   => ['boolean'],
        ];
    }
}


