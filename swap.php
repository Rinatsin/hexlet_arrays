<?php
namespace hexlet_arrays\swap;

function swap($arr, $index)
{
	if (isset($arr[$index - 1]) && isset($arr[$index + 1])) {
		$temp = $arr[$index - 1];
		$arr[$index - 1] = $arr[$index + 1];
		$arr[$index + 1] = $temp;
		return $arr;	
	} else {
		return $arr;
	}
}
