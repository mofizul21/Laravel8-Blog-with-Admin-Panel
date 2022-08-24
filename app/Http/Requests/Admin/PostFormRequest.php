<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
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
            'category_id' => ['required', 'integer'],
            'name' => ['required', 'string'],
            'slug' => ['required', 'string'],
            'description' => ['required', 'string'],
            'yt_iframe' => ['string'],
            'meta_title' => ['string'],
            'meta_description' => ['string'],
            'meta_keyword' => ['string'],
            'status' => ['nullable'],
        ];
    }
}
