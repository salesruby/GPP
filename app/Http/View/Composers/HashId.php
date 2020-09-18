<?php


namespace App\Http\View\Composers;

use Hashids\Hashids;
use Illuminate\View\View;

class HashId
{
    public function compose(View $view)
    {
        $hashIds = new Hashids('gpp', 10);
        return $view->with(['hashIds' => $hashIds,]);
    }
}
