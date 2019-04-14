<?php

namespace hexlet_arrays\findIndex;

function findIndex($arr, $elem)
{
    foreach ($arr as $key => $value) {
        if ($value === $elem) {
            return $key;
        }
    }
    return -1;
}
