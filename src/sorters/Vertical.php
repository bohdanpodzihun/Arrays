<?php

namespace Sorting\sorters;

class Vertical
{
    public function verticalSorting(array $array, int $size): array
    {
        $verticalArray = array();

        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size; $j++) {
                $verticalArray[$i][$j] = $array[$j * $size + $i];
            }
        }

        return $verticalArray;
    }
}
