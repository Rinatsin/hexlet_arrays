<?php

namespace hexlet_arrays\buildDefinitionList;

function buildDefinitionList($list)
{
    $parts = [];
    if (empty($list)) {
        return '';
    }
    foreach ($list as $item) {
        $parts[] = "<dt>{$item[0]}</dt><dd>{$item[1]}</dd>";
    }
    $innerString = implode('', $parts);
    return "<dl>{$innerString}</dl>";
}
