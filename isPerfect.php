<?php

//Написать фкнцию которая проверяет является ли число идеальным
namespace Hexlet_arrays\IsPerfect;

function isPerfect(int $num)
{
	$sum = 0;
	for ($i = 1; $i < $num; $i++) {
		if ($num % $i === 0) {
			$sum += $i;
		}
	}
	return $num === $sum && $sum !== 0;
}
