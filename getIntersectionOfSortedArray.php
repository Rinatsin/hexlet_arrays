<?php

namespace hexlet_arrays\getIntersectionOfSortedArrays;

function getIntersectionOfSortedArray($arr1, $arr2)
{
	$result = [];
	$i = 0;
	$j = 0;
	if (empty($arr1) || empty($arr2)) {
		return $result;
	}
	do {
		if ($arr1[$i] === $arr2[$j]) {
			$result[] = $arr1[$i];
			$i++;
			$j++;
		} elseif ($arr1[$i] > $arr2[$j]) {
			$j++;
		} else {
			$i++;
		}
	} while ($i < count($arr1) && $j < count($arr2));
	
	return $result;
}
