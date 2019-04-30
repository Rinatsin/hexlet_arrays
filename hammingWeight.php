<?php

namespace Hexlet_arrays\HammingWeight;

// Функция находит вес Хемминга, т.е количество 1 в бинарных числах
function hammingWeight(int $num)
{
	$counter = 0;
	$arr = str_split(decbin($num));
	for ($i = 0; $i < count($arr); $i++) {
		if ($arr[$i] == '1') {
			$counter++;
		}
	}
	return $counter;
}
