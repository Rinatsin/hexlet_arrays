<?php

namespace App\Solution;

/*
Дано не отрицательное целое число num. Итеративно сложите все входящие в него
цифры до тех пор пока не останется одна цифра.

Для числа 38 процесс будет выглядеть так:

    3 + 8 = 11
    1 + 1 = 2

Результат: 2
*/

function addDigits($num)
{
	$str = strval($num);
	strlen($str) > 1 ? $sum = 0 : $sum = $num;
	while (strlen($str) > 1) {
		for ($i = 0; $i < strlen($str); $i++) {
			$sum += $str[$i];
		}
		$str = strval($sum);
		if (strlen($str) > 1) {
			$sum = 0;
		}
	}
	return $sum;
}
