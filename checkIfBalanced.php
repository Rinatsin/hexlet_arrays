<?php

namespace hexlet_arrays\checkIfBalanced

function checkIfBalanced($expression)
{
    $stack = [];
        for ($i = 0; $i < strlen($expression); $i++) {
	        $current = $expression[$i];
	        if ($current === '(') {
	            array_push($stack, $current);
	            } elseif ($current === ')') {
	                $prev = array_pop($stack);
		        $pair = "{$prev}{$current}";
		        if ($pair !== '()') {							                return false;
			}
		    }										}										    return count($stack) == 0;
}
