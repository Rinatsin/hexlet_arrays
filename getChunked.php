<?php

namespace hexlet_arrays\Getchanked;

// BEGIN (write your solution here)
function getChunked ($arr, $size)
{
	$result = [];
	for ($i = 0; $i < count($arr); $i+=$size) {
		$result[] = array_slice($arr, $i, $size);
	}
	return $result;
}
