<?php

namespace Hexlet_arrays\BubbleSort;

// BEGIN (write your solution here)
function bubbleSort($arr)
{
    $count = count($arr);
    do {
        $swapped = false;
        for ($i = 0; $i < $count - 1; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $temp;
                $swapped = true;
            }
        }
    } while ($swapped);

    return $arr;
}
// END
