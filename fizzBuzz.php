<?php

namespace Hexlet_arrays\FizzBuzz;

function fizzBuzz($begin, $end)
{
	if ($begin > $end) {
	print_r('');
	}
	for ($i = $begin; $i <= $end; $i++) {
		if (($i % 3 === 0) && ($i % 5 === 0)) {
			print_r('FizzBuzz ');
		} elseif ($i % 5 === 0) {
			print_r('Buzz ');
		} elseif ($i % 3 === 0) {
			print_r('Fizz ');
		} else {
			print_r("{$i} ");
		}
	}
}
