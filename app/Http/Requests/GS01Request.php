<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class GS01Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'genre_name'        => 'required|unique:genre_stories|string|max:255',
            'genre_slug'        => 'required|unique:genre_stories|string|max:255',
            'genre_description' => 'required|string|max:255',
            'is_active'         => 'required|integer'
        ];
    }

    /**
     * @return array|string[]
     */
    public function messages(): array
    {
        return [
            'genre_name.required'        => 'Thiếu tên danh mục',
            'genre_description.required' => 'Thiếu mô tả',
            'genre_slug.required'        => 'Thiếu slug cho danh mục',
        ];
    }
}
