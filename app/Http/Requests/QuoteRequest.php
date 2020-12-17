<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuoteRequest extends FormRequest
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
            "name" => "required|string",
            "email" => "required|email",
            "phone" => "required|string",
            "colour_option_cover" => "required|string",
            "colour_option_inner" => "required|string",
            "colour_option_insert" => "string",
            "paper_stock_cover" => "required|string",
            "paper_stock_inner" => "required|string",
            "complete_job_finishing" => "required|string",
            "other_packaging" => "required|string",
            "date" => "required",
        ];
    }
}
