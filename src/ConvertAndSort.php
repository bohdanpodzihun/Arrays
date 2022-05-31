<?php

namespace Sorting;

class ConvertAndSort
{
    public function convertAndSort(array $inputArray, int $size): array
    {
        $array = array();

        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size; $j++) {
                $array[$i * $size + $j] = $inputArray[$i][$j];
            }
        }

        sort($array);

        return $array;
    }
}
