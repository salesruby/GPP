<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        "name",
        "phone",
        "email",
        "company",
        "address",
        "num_of_cover_page",
        "num_of_text_page",
        "cover_type",
        "trim_size",
        "qtty",
        "colour_option_cover",
        "colour_option_inner",
        "colour_option_insert",
        "paper_stock_cover",
        "paper_stock_inner",
        "paper_stock_insert",
        "paper_stock_text",
        "cover_finishing",
        "complete_job_finishing",
        "packaging",
        "other_packaging",
        "special_instruction",
        "delivery_instruction",
        "date",
        "awareness",
        "status"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function response()
    {
        return $this->hasMany(QuoteResponse::class)->latest();
    }

}
