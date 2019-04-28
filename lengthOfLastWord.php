<?php

namespace Hexlet_Arrays\lengthOfLastWord;

// Функция считает длину последнего слова строки
function lengthOfLastWord($str)
{
	$wordsArray = explode(' ', trim($str));
	$size = count($wordsArray);
	$lastWordSize = strlen($wordsArray[$size - 1]);
	return $lastWordSize;
}
