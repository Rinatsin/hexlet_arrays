<?php

namespace Hexlet_arrays\GetMirrorMatrix;

// Функция зеркалирует правую часть матрицы(двухмерного массива)
function getMirrorMatrix($matrix)
{
	$size = count($matrix);
	for ($i = 0; $i < $size; $i++) {
		for ($j = 0; $j < $size; $j++) {
			if ($j >= $size / 2) {
				$result[$i][$j] = $matrix[$i][$size - $j - 1];
			} else {
			        $result[$i][$j] = $matrix[$i][$j];
			}
		}
	}
	return $result;
}
