<?php
/*
Реализуйте функцию longestLength принимающую на вход строку и возвращающую длину максимальной последовательности из неповторяющихся символов. Подстрока может состоять из одного символа. Например в строке qweqrty, можно выделить следующие подстроки: qwe, weqrty. Самой длинной будет weqrty.
Пример:
longestLength('abcdeef'); // → 5
longestLength('jabjcdel'); // → 7
*/
namespace Hexlet_arrays\LongestLength;

function longestLength(string $str)
{
	$arrayOfLengths = [];
	$arr = str_split($str, 1);
	$temp[] = $arr[0];
	$k = 0;
		for ($i = 1; $i < count($arr); $i++) {
			for ($j = 0; $j < count($temp); $j++) {
				if ($arr[$i] === $temp[$j]) {
					$arrayOfLengths[] = count($temp);
					$k += $j + 1;
					$i = $k;
					unset($temp);
					$temp[] = $arr[$i];
					break;
				} elseif ($j === count($temp) - 1) {
					$temp[] = $arr[$i];
				        break;
				}
			}
		}
		$arrayOfLengths[] = count($temp);
		return max($arrayOfLengths);
}

//                       Решение учителя

function isUniqueString(string $string)
{
	return count(array_flip(str_split($string))) === strlen($string);
};

function longestLength(string $str)
{
	$length = strlen($str);
		for ($i = $length - 1; $i >= 0; $i -= 1) {
			for ($j = 0; $j < $length - $i; $j += 1) {
				$sub = substr($str, $j, $i + 1);
				if (isUniqueString($sub)) {
					return $i + 1;
				}
			}
		}
		return 0;
}
