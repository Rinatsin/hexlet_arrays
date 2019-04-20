<?php

namespace Hexlet_arrays\CountUniqChars;

// BEGIN (write your solution here)
function countUniqChars($text)
{
    if ($text === '') {
        return 0;
    }
    $arrayChars = str_split($text);
    $result = [];
    foreach ($arrayChars as $char) {
        if (!in_array($char, $result)) {
            $result[] = $char;
        }
    }
    return count($result);
}
// END
