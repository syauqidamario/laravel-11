<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Log;

class MathHelper
{
    static function add(int $x, int $y): int
    {
        return once(function () use ($x, $y) {
            Log::info("Adding $x and $y");
            return $x + $y;
        });
    }
}
