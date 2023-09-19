<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoryRequest extends FormRequest
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
            'story_name' => 'required|unique:stories|string|max:255',
            'story_slug' => 'required|unique:stories|string|max:255',
            'genre_id'   => 'required',
            'image'      => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048
                            |dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
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
            'image.required'      => 'Hãy thêm hình ảnh!'
        ];
    }
}
