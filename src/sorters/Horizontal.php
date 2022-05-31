<?php

namespace Sorting\sorters;

class Horizontal 
{
    public function horizontalSorting(array $array, int $size): array
    {
        $horizontalArray = array();

        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size; $j++) {
                $horizontalArray[$i][$j] = $array[$i * $size + $j];
            }
        }

        return $horizontalArray;
    }
}
