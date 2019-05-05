<?php
/*
Реализуйте функцию fib находящую положительные числа Фибоначчи. Аргументом
функции является порядковый номер числа.
*/

namespace Hexlet_arrays\Fib;

function fib($num)
{
	if ($num === 0) {
		return 0;
	}
	return $num > 2 ? fib($num - 1) + fib($num - 2) : 1;
}
