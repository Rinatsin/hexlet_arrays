<?php
/*Реализуйте функцию compareVersion, которая сравнивает переданные версии
version1 и version2. Если version1 > version2, то функция должна вернуть 1
, если version1 < version2, то - -1, если же version1 = version2, то - 0.

Версия - это строка, в которой два числа (мажорная и минорные версии) разделены
точкой, например: 12.11. Важно понимать, что версия - это не число с плавающей
точкой, а несколько чисел не связанных между собой. Проверка на больше/меньше
производится сравнением каждого числа независимо. Поэтому версия 0.12 больше
версии 0.2.

Короткое решение

function compareVersion(string $first, string $second)
{
	$version1 = explode('.', $first);
	$version2 = explode('.', $second);
	return $version1 <=> $version2;
}  
*/

namespace Hexlet_arrays\CompareVersion;

function compareVersion($version1, $version2)
{
	$version1Arr = explode('.', $version1);
	$version2Arr = explode('.', $version2);
	if ($version1Arr[0] > $version2Arr[0]) {
		return  1;
	} elseif ($version1Arr[0] < $version2Arr[0]) {
		return -1;
	} elseif ($version1Arr[0] == $version2Arr[0]) {
		if ($version1Arr[1] > $version2Arr[1]) {
			return  1;
		} elseif ($version1Arr[1] < $version2Arr[1]) {
			return -1;
		} elseif ($version1Arr[1] == $version2Arr[1]) {
		        return  0;
		}
	}
	return $version1Arr;
}
