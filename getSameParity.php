<?php

namespace hexlet_arrays\getSameParity;

/*Реализуйте функцию getSameParity, которая принимает на вход массив чисел и возвращает новый,
 состоящий из элементов, у которых такая же чётность, как и у первого элемента входного массива. */

function getSameParity($arr)
{
    if (empty($arr)) {   //проверяем массив на пустоту
        return $arr;
    }
    $newArr = [];
    if ($arr[0] % 2 == 0) {
        foreach ($arr as $item) {
            if ($item % 2 == 0) {
                $newArr[] = $item;
            }
        }
    } elseif ($arr[0] % 2 != 0) {
        foreach ($arr as $item) {
            if ($item % 2 != 0) {
                $newArr[] = $item;
            }
        }
    }

    return $newArr;
}
