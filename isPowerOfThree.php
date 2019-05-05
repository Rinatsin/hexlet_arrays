<?php

namespace Hexlet_arrays\IsPowerOfThree;

/*
Реализуйте функцию isPowerOfThree которая определяет, является ли переданное
число натуральной степенью тройки. Например число 27 это третья степень,
а 81 это четвертая.

<?php

isPowerOfThree(1); // → true (3^0)
isPowerOfThree(3); // → true
isPowerOfThree(4); // → false
isPowerOfThree(9); // → true
*/

function isPowerOfThree($num)
{
	for ($i = 0; $i < $num; $i++) {
		if (pow(3, $i) === $num) {
			return true;
		}
	}
	return false;
}
