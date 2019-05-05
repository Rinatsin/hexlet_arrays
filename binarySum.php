<?php

namespace Hexlet_arrays\Binarysum;

/*
Реализуйте функцию binarySum, которая принимает на вход два бинарных числа
(в виде строк) и возвращает их сумму. Результат (вычисленная сумма) также
должен быть бинарным числом в виде строки.

Посмотрите примеры работы функции:

binarySum('10', '1'); // 11
binarySum('1101', '101'); // 10010
*/

function binarySum($bin1, $bin2)
{
	$num1 = bindec($bin1);
	$num2 = bindec($bin2);
	$sum = $num1 + $num2;
	return decbin($sum);
}
