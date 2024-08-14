<?php

namespace App\Helpers;

use Carbon\Carbon;

class CustomHelper
{
    public static function formatPrice($price)
    {
        return number_format($price, 2, '.', '');
    }

    // public static function dateToReadable($date)
    // {
    //     return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format;
    // }
}
