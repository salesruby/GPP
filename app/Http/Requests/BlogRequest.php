<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'title' => 'required|max:23',
            'summary' => 'required|max:105',
            'content' => 'required',
            'attachment' => 'mimes:jpg,jpeg,png,svg,gif|required|max:96|dimensions:width=263,height=252'
        ];
    }
}
