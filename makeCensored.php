<?php

namespace hexlet_arrays\makeCensored;

function makeCensored($text, $stopWords)
{
    $template = '$#%!';
    $words = explode(' ', $text);
    for ($i = 0; $i < count($words); $i++) {
      for ($j = 0; $j < count($stopWords); $j++) {
        $words[$i] == $stopWords[$j] ? $words[$i] = $template : $words[$i];
      }
    }
    $newText = implode($words, ' ');
    return $newText;
}
