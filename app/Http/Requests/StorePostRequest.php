<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|min:5|max:100',
            'slug' => 'required|unique:posts',
            'content' => 'required',
            'category' => 'required',
        ];
    }
}
