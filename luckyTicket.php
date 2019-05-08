<?php

namespace Hexlet_arrays\luckyTicket;

function isHappy(string $str)
{
	$middle = strlen($str) / 2;
	$firstPart = 0;
	$lastPart = 0;
	for ($i = 0; $i < strlen($str); $i++) {
		$i < $middle ? $firstPart += $str[$i] : $lastPart += $str[$i];
	}	return $firstPart === $lastPart;
}
