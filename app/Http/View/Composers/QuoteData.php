<?php
/**
 * Created by PhpStorm.
 * User: tujailer
 * Date: 11/2/20
 * Time: 3:55 PM
 */

namespace App\Http\View\Composers;


use Illuminate\View\View;

class QuoteData
{
    public function compose(View $view)
    {
        $data = [
            'numberOfCoverPages' => [1, 2, 3, 4, 5, 6, 7, 8],
            'coverTypes' => ["Hard Case", "Soft Case", "Soft Case with jacket", "Hard Case with jacket", "Limp"],
            'colourOptions' => ["One Colour", "Two Colour", "Three Colour", "Four Colour (CYMK)", "Pantone"],
            'paperStocks' => [
                "60gsm Bond", "70gsm Bond", "80gsm Bond", "100gsm Bond", "120gsm Bond",
                "90gsm Art Card", "115gsm Art Card", "135gsm Art Card", "150gsm Art Card", "170gsm Art Card",
                "250 Art Card", "300 Art Card", "90gsm Matt Card", "115gsm Matt Card", "135gsm Matt Card",
                "150gsm Matt Card", "170gsm Matt Card", "250 Matt Card", "300 Matt Card", "others"
            ],
            'coverFinishes' => [
                "glossy_lamination" => "Glossy Lamination", "matt_lamination" => "Matt Lamination",
                "spot_lamination" => "Spot Lamination", "vanish" => "Vanish", "uv" => "UV"
            ],
            'completeJobFinishes' => ["perfect_bind" => "Perfect Bind", "saddle_stitched" => "Saddle Stitched", "spiral_wire_o" => "Spiral Wire-O"],
            'packaging' => ["nylon_heat_seal" => "Nylon Heat Seal", "nylon_peal_seal" => "Nylon Peal Seal"],
            'otherPackaging' => ["boxed" => "Boxed", "wrapped" => "Wrapped"],
            'delivery' =>['Pick Up', 'Delivery'],
            'awareness' => ["media" => "Media", "friend" => "Friends", "advert" => "Advert", "other_medium" => "Vanish"]
        ];

        return $view->with(['data' => $data]);
    }
}