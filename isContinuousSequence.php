<?php

namespace hexlet_arrays\isContinuousSequence;

// BEGIN (write your solution here)
function isContinuousSequence($arr)
{
    if (empty($arr)) {
        return false;
    } else {
        foreach ($arr as $key => $item) {
            if (isset($arr[$key + 1])) {
                $result = $arr[$key + 1] - $item;
                if ($result !== 1) {
                    return false;
                }
            }
        }
        return true;
    }
}
