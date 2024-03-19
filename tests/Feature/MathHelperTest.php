<?php

use App\Helpers\MathHelper;

test('once function', function () {
    $result1 = MathHelper::add(100, 100);
    $result2 = MathHelper::add(100, 100);
    expect($result1)->toBe($result2);
});
