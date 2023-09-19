<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStoryRequest extends FormRequest
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
            'story_name' => 'required|string|max:255',
            'story_slug' => 'required|string|max:255',
            'genre_id'   => 'required',
            'active'     => 'required|integer'
        ];
    }

    /**
     * @return array|string[]
     */
    public function messages(): array
    {
        return [
            'story_name.required' => 'Xin vui lòng nhập tên truyện!',
            'story_slug.required' => 'Hãy nhập slug truyện!',
            'genre_id.required'   => 'Hãy chọn danh mục cho truyện!',
        ];
    }
}
