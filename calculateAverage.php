<?php

namespace hexlet_arrays\calculateAverage;

function calculateAverage($arr)
{
    if (empty($arr)) {
        return null;
    }
    $sum = 0;
    for ($i = 0; $i < sizeof($arr); $i++) {
        $sum += $arr[$i];
    }
    return $sum / sizeof($arr);
}
