<?php

namespace hexlet_arrays\getSameCount;

function getSameCount($firstArray, $secondArray)
{
    $counter = 0;
    $uniqueFirst = array_unique($firstArray);
    $uniqueSecond = array_unique($secondArray);
    foreach($uniqueFirst as $item) {
        foreach($uniqueSecond as $subItem) {
            if ($item === $subItem) {
                $counter++;
            }
        }
    }
    return $counter;
}
