<?php

namespace Sorting\sorters;

class Diagonal
{
public function diagonalSorting(array $array, int $size): array
    {
        $diagonalArray = array();
        $shiftedArray = $array;

        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size; $j++) {
                $diagonalArray[$i - $j][$j] = array_shift($shiftedArray);
            }
        }

        for ($i = $size - 2; $i >= 0; $i--) {
            for ($j = 0; $j <= $i; $j++) {
                $diagonalArray[$size - 1 - $j][$size - 1 - $i + $j] = array_shift($shiftedArray);
            }
        }

        return $diagonalArray;
    }
}
