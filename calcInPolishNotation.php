<?php

namespace Hexlet_arrays\CalcInPolishNotation;

function mathOperations($element1, $element2, $operand)
{
    switch ($operand) {
	case '*':
		return $element2 * $element1;
		break;
	case '/':
	        return $element2 / $element1;
	        break;
	case '+':
	        return $element2 + $element1;
	        break;
	case '-':
	        return $element2 - $element1;
	        break;
	}
}
function calcInPolishNotation($arr)
{
	$stack = [];
        $operands = ['*', '/', '+', '-'];
	if (empty($arr)) {
		return [];
	}
	for ($i = 0; $i < count($arr); $i++) {
		if (in_array($arr[$i], $operands)) {
			$element1 = array_pop($stack);
			$element2 = array_pop($stack);
			$result = mathOperations($element1, $element2, $arr[$i]);
			array_push($stack, $result);
		} else {
		        array_push($stack, $arr[$i]);
		}
	}
	return $stack[0];
}
