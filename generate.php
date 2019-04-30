<?php
/*Функция реализует алгоритм поиска строки по ее индексу
в треугольнике Паскаля*/
namespace Hexlet_arrays\Generate;

function generate(int $rowNumber)
{
	$arr = [];
	$arr[0] = 1;
	for ($i = 1; $i <= $rowNumber; $i++) {
		$arr[$i] = 0;
	}
	for ($j = 1; $j <= $rowNumber; $j++) {
		for ($i = $j; $i >= 1; $i--) {
			$arr[$i] = $arr[$i - 1] + $arr[$i];
		}
	}
	return $arr;
}
