<?php 
/*Реализуйте функцию summaryRanges, которая находит в массиве непрерывные
возрастающие последовательности чисел и возвращает массив с их перечислением.

<?php

summaryRanges([]);
// → []

summaryRanges([1]);
// → []

summaryRanges([1, 2, 3]);
// → ["1->3"]

summaryRanges([0, 1, 2, 4, 5, 7]);
// → ["0->2", "4->5"]

summaryRanges([110, 111, 112, 111, -5, -4, -2, -3, -4, -5]);
// → ['110->112', '-5->-4']

*/

namespace Hexlet_arrays\summaryRanges;

function summaryRanges($arr)
{
	$first = 0;
	$counter = 0;
	$result = [];
	for ($i = 1; $i < count($arr); $i++) {
		$diff = $arr[$i] - $arr[$i - 1];
		if ($diff == 1) {
			if ($counter == 0) {
				$first = $arr[$i - 1];
				$counter++;
			} elseif ($i == (count($arr) - 1)) {
				$last = $arr[$i];
				$counter--;
				$result[] = "{$first}->{$last}";
			}
		} elseif ($counter) {
		$last = $arr[$i - 1];
		$counter--;
		$result[] = "{$first}->{$last}";
		}
	}
	return $result;
}


