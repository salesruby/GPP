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
            "company" => "string",
            "address" => "required|string",
            "num_of_cover_page" => "integer",
            "num_of_text_page" => "integer",
            "cover_type" => "required|string",
            "trim_size" => "string",
            "qtty" => "integer",
            "colour_option_cover" => "required|string",
            "colour_option_inner" => "required|string",
            "colour_option_insert" => "required|string",
            "paper_stock_cover" => "required|string",
            "paper_stock_inner" => "required|string",
            "paper_stock_insert" => "required|string",
            "paper_stock_text" => "required|string",
            "cover_finishing" => "required|string",
            "complete_job_finishing" => "required|string",
            "packaging" => "required|string",
            "other_packaging" => "required|string",
            "special_instruction" => "string",
            "delivery_instruction" => "string",
            "date" => "required",
            "awareness" => "string",
        ];
    }
}
