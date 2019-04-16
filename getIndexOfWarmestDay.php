<?php

namespace hexlet_arrays\getIndexOfWarmestDay;

// BEGIN (write your solution here)
function getIndexOfWarmestDay($arr)
{
    if (empty($arr)) {
        return null;
    }
    foreach ($arr as $value) {
        $resultArr[] = max($value);
    }
    $max = max($resultArr);
    foreach ($resultArr as $key => $value) {
        if ($value === $max) {
          return $key;
        }
    }
}
